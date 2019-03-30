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

    $bloodParams = new BloodParameters();
    $bloodParams->setErythrocytes($faker->randomFloat(
        1,
        BloodParametersReference::getErythrocytesMin($patient->getSex()) - 1,
        BloodParametersReference::getErythrocytesMax($patient->getSex()) + 1
    ));
    $bloodParams->setHematocrit($faker->randomFloat(
        1,
        BloodParametersReference::getHematocritMin($patient->getSex()) - 0.3,
        BloodParametersReference::getHematocritMax($patient->getSex()) + 0.3
    ));
    $bloodParams->setHemoglobin($faker->randomFloat(
        1,
        BloodParametersReference::getHemoglobinMin($patient->getSex()) - 3,
        BloodParametersReference::getHemoglobinMax($patient->getSex()) + 3
    ));
    $bloodParams->setLeukocytes($faker->randomFloat(
        1,
        BloodParametersReference::getLeukocytesMin() - 3,
        BloodParametersReference::getLeukocytesMax() + 3
    ));
    $bloodParams->setLymphocytes($faker->randomFloat(
        1,
        BloodParametersReference::getLymphocytesMin() - 1,
        BloodParametersReference::getLymphocytesMax() + 1
    ));
    $bloodParams->setMCH($faker->numberBetween(
        BloodParametersReference::getMCHMin() - 10,
        BloodParametersReference::getMCHMax() + 10
    ));
    $bloodParams->setMCHC($faker->numberBetween(
        BloodParametersReference::getMCHCMin() - 10,
        BloodParametersReference::getMCHCMax() + 10
    ));
    $bloodParams->setMCV($faker->numberBetween(
        BloodParametersReference::getMCVMin($patient->getSex()) - 20,
        BloodParametersReference::getMCVMax($patient->getSex()) + 20
    ));
    $bloodParams->setMonocytes($faker->randomFloat(
        1,
        BloodParametersReference::getMonocytesMin(),
        BloodParametersReference::getMonocytesMax() + 0.5
    ));
    $bloodParams->setThrombocytes($faker->numberBetween(
        BloodParametersReference::getThrombocytesMin() - 50,
        BloodParametersReference::getThrombocytesMax() + 50
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

