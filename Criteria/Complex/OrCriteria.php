<?php

namespace Criteria\Complex;

use Criteria\PatientCriteriaInterface;
use Model\Patient\Patient;

class OrCriteria implements PatientCriteriaInterface
{
    /**
     * @var PatientCriteriaInterface
     */
    private $criteria1;

    /**
     * @var PatientCriteriaInterface
     */
    private $criteria2;

    /**
     * AndCriteria constructor.
     *
     * @param PatientCriteriaInterface $criteria1
     * @param PatientCriteriaInterface $criteria2
     */
    public function __construct(PatientCriteriaInterface $criteria1, PatientCriteriaInterface $criteria2)
    {
        $this->criteria1 = $criteria1;
        $this->criteria2 = $criteria2;
    }

    /**
     * @param Patient $patient
     *
     * @return bool
     */
    public function match(Patient $patient): bool
    {
        return $this->criteria1->match($patient) || $this->criteria2->match($patient);
    }
}