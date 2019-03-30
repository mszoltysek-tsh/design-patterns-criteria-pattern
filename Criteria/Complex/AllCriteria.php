<?php

namespace Criteria\Complex;

use Criteria\PatientCriteriaInterface;
use Model\Patient\Patient;

class AllCriteria implements PatientCriteriaInterface
{
    /**
     * @var array|PatientCriteriaInterface[]
     */
    private $criterias;

    /**
     * AllCriteria constructor.
     *
     * @param array|PatientCriteriaInterface[] $criterias
     */
    public function __construct($criterias)
    {
        $this->criterias = $criterias;
    }

    /**
     * @param Patient $patient
     *
     * @return bool
     */
    public function match(Patient $patient): bool
    {
        foreach ($this->criterias as $criteria) {
            if (!$criteria->match($patient)) {
                return false;
            }
        }

        return true;
    }
}