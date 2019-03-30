<?php

namespace Criteria\Health\BloodParameters;

use Criteria\PatientCriteriaInterface;
use Model\Patient\BloodParametersReference;
use Model\Patient\Patient;

class ErythrocytesOverCriteria implements PatientCriteriaInterface
{
    /**
     * @param Patient $patient
     *
     * @return bool
     */
    public function match(Patient $patient): bool
    {
        return $patient->getBloodParameters()->getErythrocytes()
            > BloodParametersReference::getErythrocytesMax($patient->getSex());
    }
}