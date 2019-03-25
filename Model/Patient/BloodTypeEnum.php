<?php

class BloodTypeEnum extends AbstractEnum
{
    const ZERO_RH_MINUS = '0Rh-';
    const ZERO_RH_PLUS  = '0Rh+';

    const A_RH_MINUS = 'ARh-';
    const A_RH_PLUS  = 'ARh+';

    const B_RH_MINUS = 'BRh-';
    const B_RH_PLUS  = 'BRh+';

    const AB_RH_MINUS = 'ABRh-';
    const AB_RH_PLUS  = 'ABRh+';

    protected $values = [
        self::ZERO_RH_MINUS,
        self::ZERO_RH_PLUS,
        self::A_RH_MINUS,
        self::A_RH_PLUS,
        self::B_RH_MINUS,
        self::B_RH_PLUS,
        self::AB_RH_MINUS,
        self::AB_RH_PLUS,
    ];
}