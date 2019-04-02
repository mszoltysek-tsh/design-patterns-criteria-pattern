<?php

namespace HealthTest;

use Criteria\Complex\NeitherCriteria;
use Criteria\Health\BloodParameters\ErythrocytesBelowCriteria;
use Criteria\Health\BloodParameters\ErythrocytesOverCriteria;
use Criteria\Health\BloodParameters\HematocritBelowCriteria;
use Criteria\Health\BloodParameters\HematocritOverCriteria;
use Criteria\Health\BloodParameters\HemoglobinBelowCriteria;
use Criteria\Health\BloodParameters\HemoglobinOverCriteria;
use Criteria\Health\BloodParameters\LeukocytesBelowCriteria;
use Criteria\Health\BloodParameters\LeukocytesOverCriteria;
use Criteria\Health\BloodParameters\LymphocytesBelowCriteria;
use Criteria\Health\BloodParameters\LymphocytesOverCriteria;
use Criteria\Health\BloodParameters\MCHBelowCriteria;
use Criteria\Health\BloodParameters\MCHCBelowCriteria;
use Criteria\Health\BloodParameters\MCHCOverCriteria;
use Criteria\Health\BloodParameters\MCHOverCriteria;
use Criteria\Health\BloodParameters\MCVBelowCriteria;
use Criteria\Health\BloodParameters\MCVOverCriteria;
use Criteria\Health\BloodParameters\MonocytesBelowCriteria;
use Criteria\Health\BloodParameters\MonocytesOverCriteria;
use Criteria\Health\BloodParameters\ThrombocytesBelowCriteria;
use Criteria\Health\BloodParameters\ThrombocytesOverCriteria;

class WellTest extends AbstractHealthTest
{
    /**
     * WellTest constructor.
     */
    public function __construct()
    {
        $this->criteria = new NeitherCriteria([
            new ErythrocytesOverCriteria(),
            new HematocritOverCriteria(),
            new HemoglobinOverCriteria(),
            new LeukocytesOverCriteria(),
            new LymphocytesOverCriteria(),
            new MCHOverCriteria(),
            new MCHCOverCriteria(),
            new MCVOverCriteria(),
            new MonocytesOverCriteria(),
            new ThrombocytesOverCriteria(),

            new ErythrocytesBelowCriteria(),
            new HematocritBelowCriteria(),
            new HemoglobinBelowCriteria(),
            new LeukocytesBelowCriteria(),
            new LymphocytesBelowCriteria(),
            new MCHBelowCriteria(),
            new MCHCBelowCriteria(),
            new MCVBelowCriteria(),
            new MonocytesBelowCriteria(),
            new ThrombocytesBelowCriteria()
        ]);
    }
}