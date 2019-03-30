<?php

namespace Criteria;

use Model\Patient\Patient;

interface PatientCriteriaInterface
{
    public function match(Patient $patient) : bool;
}