<?php

class SexEnum extends AbstractEnum
{
    const MALE   = 'male';
    const FEMALE = 'female';
    const OTHER  = 'other';

    protected $values = [self::MALE, self::FEMALE, self::OTHER];
}