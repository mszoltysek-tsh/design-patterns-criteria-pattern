<?php

use Model\Address\Address;
use Model\Patient\BloodTypeEnum;
use Model\Patient\EyeColorEnum;
use Model\Patient\HumanRaceEnum;
use Model\Patient\Patient;
use Model\Patient\SexEnum;

spl_autoload_register(function ($className) {
    $className = ltrim($className, '\\');
    $fileName = '';
    $namespace = '';
    if ($lastNsPos = strripos($className, '\\')) {
        $namespace = substr($className, 0, $lastNsPos);
        $className = substr($className, $lastNsPos + 1);
        $fileName = str_replace('\\', DIRECTORY_SEPARATOR, $namespace) . DIRECTORY_SEPARATOR;
    }
    $fileName = __DIR__ . '/../' . $fileName . $className . '.php';
    if (file_exists($fileName)) {
        require $fileName;
        return true;
    }
    return false;
});
require_once __DIR__.'/../vendor/fzaninotto/faker/src/autoload.php';


$population = 100;

prepareDataSet($population);

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

//    $bloodParams = new BloodParameters();
//    $patient->setBloodParameters();
    $patient->setBloodType($faker->randomElement(BloodTypeEnum::getValues()));

    $patient->setHeight($faker->numberBetween(150 ,200));
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

