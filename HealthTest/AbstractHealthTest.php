<?php

namespace HealthTest;

use Criteria\PatientCriteriaInterface;
use Model\Patient\Patient;

abstract class AbstractHealthTest implements HealthTestInterface
{
    /** @var PatientCriteriaInterface */
    protected $criteria;

    /**
     * @param array|Patient[] $population
     *
     * @return array|Patient[]
     */
    public function testPopulation(array $population): array
    {
        return array_filter($population, function ($patient) {
            return $this->criteria->match($patient);
        });
    }
}