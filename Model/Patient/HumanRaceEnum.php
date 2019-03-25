<?php

class HumanRaceEnum implements EnumInterface
{
    const BLACK     = 'black';
    const CAUCASIAN = 'caucasian';
    const ASIAN     = 'asian';

    /**
     * @return array
     */
    public static function getValues() : array
    {
        return [self::ASIAN, self::BLACK, self::CAUCASIAN];
    }
}