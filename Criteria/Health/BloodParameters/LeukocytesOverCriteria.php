<?php

namespace Criteria\Health\BloodParameters;

use Criteria\PatientCriteriaInterface;
use Model\Patient\BloodParametersReference;
use Model\Patient\Patient;

class LeukocytesOverCriteria implements PatientCriteriaInterface
{
    /**
     * @param Patient $patient
     *
     * @return bool
     */
    public function match(Patient $patient): bool
    {
        return $patient->getBloodParameters()->getLeukocytes()
            > BloodParametersReference::getLeukocytesMax();
    }
}