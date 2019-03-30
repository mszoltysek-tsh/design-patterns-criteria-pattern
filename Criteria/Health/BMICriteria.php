<?php

namespace Criteria\Health;

use Criteria\PatientCriteriaInterface;
use Model\Patient\Patient;

class BMICriteria implements PatientCriteriaInterface
{
    /** @var int */
    private $bmiLimit;

    /**
     * BMICriteria constructor.
     *
     * @param int $bmiLimit
     */
    public function __construct(int $bmiLimit)
    {
        $this->bmiLimit = $bmiLimit;
    }

    /**
     * @param Patient $patient
     *
     * @return bool
     */
    public function match(Patient $patient): bool
    {
        return ($patient->getWeight() / ($patient->getHeight()/100)**2) > $this->bmiLimit;
    }
}