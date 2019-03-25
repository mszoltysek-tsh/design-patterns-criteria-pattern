<?php

class HumanRaceEnum extends AbstractEnum
{
    const BLACK     = 'black';
    const CAUCASIAN = 'caucasian';
    const ASIAN     = 'asian';

    protected $values = [self::ASIAN, self::BLACK, self::CAUCASIAN];
}