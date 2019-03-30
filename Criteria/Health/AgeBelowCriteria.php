<?php

namespace Criteria\Health;

use Criteria\PatientCriteriaInterface;
use Model\Patient\Patient;

class AgeBelowCriteria implements PatientCriteriaInterface
{
    /** @var int */
    private $age;

    /**
     * AgeAboveCriteria constructor.
     *
     * @param int $age
     */
    public function __construct(int $age)
    {
        $this->age = $age;
    }

    /**
     * @param Patient $patient
     *
     * @return bool
     */
    public function match(Patient $patient): bool
    {
        return $patient->getBirthDate()->diff(new \DateTime())->y < $this->age;
    }
}