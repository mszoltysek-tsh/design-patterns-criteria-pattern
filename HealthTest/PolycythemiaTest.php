<?php

namespace HealthTest;

use Criteria\Complex\AndCriteria;
use Criteria\Complex\AnyCriteria;
use Criteria\Health\AgeAboveCriteria;
use Criteria\Health\AgeBelowCriteria;
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

class PolycythemiaTest extends AbstractHealthTest
{
    /**
     * PolycythemiaTest constructor.
     */
    public function __construct()
    {
        $this->criteria = new AndCriteria(
            new AndCriteria(
                new AgeAboveCriteria(40),
                new AgeBelowCriteria(80)
            ),
            new AnyCriteria([
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
            ])
        );
    }
}