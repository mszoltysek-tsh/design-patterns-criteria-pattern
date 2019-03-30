<?php

namespace Criteria\Health\BloodParameters;

use Criteria\PatientCriteriaInterface;
use Model\Patient\BloodParametersReference;
use Model\Patient\Patient;

class HemoglobinOverCriteria implements PatientCriteriaInterface
{
    /**
     * @param Patient $patient
     *
     * @return bool
     */
    public function match(Patient $patient): bool
    {
        return $patient->getBloodParameters()->getHemoglobin()
            > BloodParametersReference::getHemoglobinMax($patient->getSex());
    }
}