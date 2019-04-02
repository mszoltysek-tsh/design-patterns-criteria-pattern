<?php

use HealthTest\CardiovascularDiseaseTest;
use HealthTest\PolycythemiaTest;
use HealthTest\WellTest;
use Model\Patient\Patient;

require_once 'autoload.php';
require_once 'config.php';
require_once 'print.php';
require_once 'data-set-generator.php';

ini_set('memory_limit', '1024M');
$dataSet = prepareDataSet(POPULATION);

$test = new CardiovascularDiseaseTest();
//$test = new PolycythemiaTest();

$sick = $test->testPopulation($dataSet);

array_map(function(Patient $patient) {
    echo printPatient($patient)."\n\n";
}, $sick);

echo "\n======================================================\n".
     get_class($test)." matches: ".count($sick).
     "\n======================================================\n";
