<?php

namespace HealthTest;

use Criteria\Complex\AndCriteria;
use Criteria\Health\AgeAboveCriteria;
use Criteria\Health\BMICriteria;
use Criteria\Health\HypertensionCriteria;

class CardiovascularDiseaseTest extends AbstractHealthTest
{
    /**
     * CardiovascularDiseaseTest constructor.
     */
    public function __construct()
    {
        $this->criteria = new AndCriteria(
            new AndCriteria(
                new AgeAboveCriteria(25),
                new BMICriteria(25)
            ),
            new HypertensionCriteria()
        );
    }
}