<?php

namespace HealthTest;

use Criteria\Complex\NeitherCriteria;
use Criteria\Health\BloodParameters\ErythrocytesOverCriteria;
use Criteria\Health\BloodParameters\HematocritOverCriteria;
use Criteria\Health\BloodParameters\HemoglobinOverCriteria;
use Criteria\Health\BloodParameters\LeukocytesOverCriteria;
use Criteria\Health\BloodParameters\LymphocytesOverCriteria;
use Criteria\Health\BloodParameters\MCHCOverCriteria;
use Criteria\Health\BloodParameters\MCHOverCriteria;
use Criteria\Health\BloodParameters\MCVOverCriteria;
use Criteria\Health\BloodParameters\MonocytesOverCriteria;
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
            new ThrombocytesOverCriteria()
        ]);
    }
}