<?php

namespace HealthTest;

use Model\Patient\Patient;

interface HealthTestInterface
{
    /**
     * @param array|Patient[] $population
     *
     * @return array|Patient[]
     */
    public function testPopulation(array $population) : array;
}