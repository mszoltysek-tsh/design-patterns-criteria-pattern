<?php

require_once __DIR__.'/../vendor/fzaninotto/faker/src/autoload.php';

$population = 100;

function prepareDataSet($population)
{
    $dataSet = [];

    for ($i = 0; $i < $population; $i++) {
        $dataSet[] = generatePatient();
    }
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

    $patient->setBloodParameters();
    $patient->setBloodType($faker->randomElement(BloodTypeEnum::getValues()));

    $patient->setHeight($faker->numberBetween(150 ,200));
    $patient->setChestWidth($faker->numberBetween(90, 140));
    $patient->setWaistWidth($faker->numberBetween(70, 110));

//    $patient->setSystolicPressure(generate);
//    $patient->setDiastolicPressure();
}