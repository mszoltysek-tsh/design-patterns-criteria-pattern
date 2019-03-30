<?php

namespace Criteria\Health;

use Criteria\PatientCriteriaInterface;
use Model\Patient\Patient;

class HypertensionCriteria implements PatientCriteriaInterface
{
    const SYSTOLIC_LIMIT = 140;
    const DIASTOLIC_LIMIT = 90;

    /**
     * @param Patient $patient
     *
     * @return bool
     */
    public function match(Patient $patient): bool
    {
        return $patient->getSystolicPressure() > self::SYSTOLIC_LIMIT
            || $patient->getDiastolicPressure() > self::DIASTOLIC_LIMIT;
    }
}