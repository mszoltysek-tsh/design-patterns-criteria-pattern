<?php

use Model\Patient\BloodParameters;
use Model\Patient\BloodParametersReference;
use Model\Patient\Patient;

function printPatient(Patient $patient)
{
    return sprintf("
%s %s, age: %d years, %s
weight: %d kg, height: %d cm, waist: %d cm, chest: %d cm
systolic pressure: %d, diastolic: %d
BLOOD PARAMETERS: %s",
        $patient->getFirstName(),
        $patient->getLastName(),
        $patient->getBirthDate()->diff(new \DateTime())->y,
        $patient->getSex(),
        $patient->getWeight(),
        $patient->getHeight(),
        $patient->getWaistWidth(),
        $patient->getChestWidth(),
        $patient->getSystolicPressure(),
        $patient->getDiastolicPressure(),
        printBloodParameter($patient->getBloodParameters(), $patient->getSex())
    );
}

function printBloodParameter(BloodParameters $parameters, $sex)
{
    $data = [
        [
            'Erythrocytes',
            $parameters->getErythrocytes(),
            BloodParametersReference::getErythrocytesMin($sex),
            BloodParametersReference::getErythrocytesMax($sex)
        ], [
            'Thrombocytes',
            $parameters->getThrombocytes(),
            BloodParametersReference::getThrombocytesMin(),
            BloodParametersReference::getThrombocytesMax(),
        ], [
            'Monocytes',
            $parameters->getMonocytes(),
            BloodParametersReference::getMonocytesMin(),
            BloodParametersReference::getMonocytesMax(),
        ], [
            'Lymphocytes',
            $parameters->getLymphocytes(),
            BloodParametersReference::getLymphocytesMin(),
            BloodParametersReference::getLymphocytesMax(),
        ], [
            'Leukocytes',
            $parameters->getLeukocytes(),
            BloodParametersReference::getLeukocytesMin(),
            BloodParametersReference::getLeukocytesMax(),
        ], [
            'Hemoglobin',
            $parameters->getHemoglobin(),
            BloodParametersReference::getHemoglobinMin($sex),
            BloodParametersReference::getHemoglobinMax($sex),
        ], [
            'Hematocrit',
            $parameters->getHematocrit(),
            BloodParametersReference::getHematocritMin($sex),
            BloodParametersReference::getHematocritMax($sex),
        ], [
            'MCV',
            $parameters->getMCV(),
            BloodParametersReference::getMCVMin($sex),
            BloodParametersReference::getMCVMax($sex),
        ], [
            'MCH',
            $parameters->getMCH(),
            BloodParametersReference::getMCHMin(),
            BloodParametersReference::getMCHMax(),
        ], [
            'MCHC',
            $parameters->getMCHC(),
            BloodParametersReference::getMCHCMin(),
            BloodParametersReference::getMCHCMax()
        ]

    ];

    $desc = '';
    array_map(function($item) use (&$desc) {
        $desc .= vsprintf("\n  > %15.15s: %7.2f (%7.2f - %7.2f)", $item);
    }, $data);

    return $desc;
}
