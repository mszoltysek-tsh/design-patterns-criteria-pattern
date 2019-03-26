<?php

namespace Model\Patient;


use Util\EnumInterface;

class SexEnum implements EnumInterface
{
    const MALE   = 'male';
    const FEMALE = 'female';
    const OTHER  = 'other';

    /**
     * @return array
     */
    public static function getValues() : array
    {
        return [self::MALE, self::FEMALE, self::OTHER];
    }
}