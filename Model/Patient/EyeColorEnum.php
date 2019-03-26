<?php

namespace Model\Patient;

use Util\EnumInterface;

class EyeColorEnum implements EnumInterface
{
    const BLUE  = 'blue';
    const BROWN = 'brown';
    const GREEN = 'green';

    /**
     * @return array
     */
    public static function getValues() : array
    {
        return [self::BLUE, self::BROWN, self::GREEN];
    }
}