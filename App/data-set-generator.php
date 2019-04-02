<?php

use Model\Address\Address;
use Model\Patient\BloodParameters;
use Model\Patient\BloodParametersReference;
use Model\Patient\BloodTypeEnum;
use Model\Patient\EyeColorEnum;
use Model\Patient\HumanRaceEnum;
use Model\Patient\Patient;
use Model\Patient\SexEnum;

function prepareDataSet($population)
{
    $dataSet = [];

    for ($i = 0; $i < $population; $i++) {
        $dataSet[] = generatePatient();
    }

    return $dataSet;
}

function generatePatient() : Patient
{
    $faker = Faker\Factory::create();

    $patient = new Patient();
    $patient->setFirstName($faker->firstName);
    $patient->setLastName($faker->lastName);
    $patient->setPesel($faker->numberBetween(11111111111, 99999999999));

    $patient->setInsuranceEndDate($faker->dateTimeBetween('+1 month', '+12 months'));
    $patient->setBirthDate($faker->dateTimeBetween('-90 years', '-10 years'));

    $patient->setEyeColor($faker->randomElement(EyeColorEnum::getValues()));
    $patient->setRace($faker->randomElement(HumanRaceEnum::getValues()));
    $patient->setSex($faker->randomElement(SexEnum::getValues()));

    $factor = $faker->randomFloat(2, 0.8, 1.2);
    $bloodParams = new BloodParameters();
    $bloodParams->setErythrocytes($faker->randomFloat(
        1,
        BloodParametersReference::getErythrocytesMin($patient->getSex()) * $factor,
        BloodParametersReference::getErythrocytesMax($patient->getSex()) * $factor
    ));
    $bloodParams->setHematocrit($faker->randomFloat(
        1,
        BloodParametersReference::getHematocritMin($patient->getSex()) * $factor,
        BloodParametersReference::getHematocritMax($patient->getSex()) * $factor
    ));
    $bloodParams->setHemoglobin($faker->randomFloat(
        1,
        BloodParametersReference::getHemoglobinMin($patient->getSex()) * $factor,
        BloodParametersReference::getHemoglobinMax($patient->getSex()) * $factor
    ));
    $bloodParams->setLeukocytes($faker->randomFloat(
        1,
        BloodParametersReference::getLeukocytesMin() * $factor,
        BloodParametersReference::getLeukocytesMax() * $factor
    ));
    $bloodParams->setLymphocytes($faker->randomFloat(
        1,
        BloodParametersReference::getLymphocytesMin() * $factor,
        BloodParametersReference::getLymphocytesMax() * $factor
    ));
    $bloodParams->setMCH($faker->numberBetween(
        BloodParametersReference::getMCHMin() * $factor,
        BloodParametersReference::getMCHMax() * $factor
    ));
    $bloodParams->setMCHC($faker->numberBetween(
        BloodParametersReference::getMCHCMin() * $factor,
        BloodParametersReference::getMCHCMax() * $factor
    ));
    $bloodParams->setMCV($faker->numberBetween(
        BloodParametersReference::getMCVMin($patient->getSex()) * $factor,
        BloodParametersReference::getMCVMax($patient->getSex()) * $factor
    ));
    $bloodParams->setMonocytes($faker->randomFloat(
        1,
        BloodParametersReference::getMonocytesMin(),
        BloodParametersReference::getMonocytesMax() * $factor
    ));
    $bloodParams->setThrombocytes($faker->numberBetween(
        BloodParametersReference::getThrombocytesMin() * $factor,
        BloodParametersReference::getThrombocytesMax() * $factor
    ));

    $patient->setBloodParameters($bloodParams);
    $patient->setBloodType($faker->randomElement(BloodTypeEnum::getValues()));

    $patient->setHeight($faker->numberBetween(150 ,200));
    $patient->setWeight($faker->numberBetween(50 ,120));
    $patient->setChestWidth($faker->numberBetween(90, 140));
    $patient->setWaistWidth($faker->numberBetween(70, 110));

    $patient->setSystolicPressure($faker->numberBetween(50, 150));
    $patient->setDiastolicPressure($faker->numberBetween(50, 150));

    $address = new Address();
    $address->setAddressPart1($faker->streetAddress);
    $address->setCity($faker->city);
    $address->setCountry($faker->country);

    $patient->setAddress($address);

    return $patient;
}

