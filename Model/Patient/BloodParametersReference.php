<?php

namespace Model\Patient;

class BloodParametersReference
{
    const ERYTHROCYTES_MALE_MIN = 4.7;
    const ERYTHROCYTES_MALE_MAX = 6.1;
    const ERYTHROCYTES_FEMALE_MIN = 4.2;
    const ERYTHROCYTES_FEMALE_MAX = 5.4;

    const HEMATOCRIT_MALE_MIN = 0.42;
    const HEMATOCRIT_MALE_MAX = 0.52;
    const HEMATOCRIT_FEMALE_MIN = 0.37;
    const HEMATOCRIT_FEMALE_MAX = 0.47;

    const HEMOGLOBIN_MALE_MIN = 12.5;
    const HEMOGLOBIN_MALE_MAX = 18;
    const HEMOGLOBIN_FEMALE_MIN = 11.5;
    const HEMOGLOBIN_FEMALE_MAX = 16;

    const LEUKOCYTES_MIN = 4;
    const LEUKOCYTES_MAX = 10.8;

    const LYMPHOCYTES_MIN = 1;
    const LYMPHOCYTES_MAX = 4.5;

    const MCH_MIN = 27;
    const MCH_MAX = 31;

    const MCHC_MIN = 33;
    const MCHC_MAX = 37;

    const MCV_MALE_MIN = 80;
    const MCV_MALE_MAX = 94;
    const MCV_FEMALE_MIN = 81;
    const MCV_FEMALE_MAX = 99;

    const MONOCYTES_MIN = 0;
    const MONOCYTES_MAX = 0.8;

    const THROMBOCYTES_MIN = 130;
    const THROMBOCYTES_MAX = 450;

    public static function getErythrocytes($sex)
    {
        return $sex == SexEnum::MALE ?
            ['min' => self::ERYTHROCYTES_MALE_MIN, 'max' => self::ERYTHROCYTES_MALE_MAX] :
            ['min' => self::ERYTHROCYTES_FEMALE_MIN, 'max' => self::ERYTHROCYTES_FEMALE_MAX]
        ;
    }

    public static function getErythrocytesMin($sex)
    {
        return $sex == SexEnum::MALE ? self::ERYTHROCYTES_MALE_MIN : self::ERYTHROCYTES_FEMALE_MIN;
    }

    public static function getErythrocytesMax($sex)
    {
        return $sex == SexEnum::MALE ? self::ERYTHROCYTES_MALE_MAX : self::ERYTHROCYTES_FEMALE_MAX;
    }

    public static function getHemoglobin($sex)
    {
        return $sex == SexEnum::MALE ?
            ['min' => self::HEMOGLOBIN_MALE_MIN, 'max' => self::HEMOGLOBIN_MALE_MAX] :
            ['min' => self::HEMOGLOBIN_FEMALE_MIN, 'max' => self::HEMOGLOBIN_FEMALE_MIN]
        ;
    }

    public static function getHemoglobinMin($sex)
    {
        return $sex == SexEnum::MALE ? self::HEMOGLOBIN_MALE_MIN : self::HEMOGLOBIN_FEMALE_MIN;
    }

    public static function getHemoglobinMax($sex)
    {
        return $sex == SexEnum::MALE ? self::HEMOGLOBIN_MALE_MAX : self::HEMOGLOBIN_FEMALE_MAX;
    }

    public static function getHematocrit($sex)
    {
        return $sex == SexEnum::MALE ? 
            ['min' => self::HEMATOCRIT_MALE_MIN, 'max' => self::HEMATOCRIT_MALE_MAX] : 
            ['min' => self::HEMATOCRIT_FEMALE_MIN, 'max' => self::HEMATOCRIT_FEMALE_MAX]
        ;
    }

    public static function getHematocritMin($sex)
    {
        return $sex == SexEnum::MALE ? self::HEMATOCRIT_MALE_MIN : self::HEMATOCRIT_FEMALE_MIN;
    }

    public static function getHematocritMax($sex)
    {
        return $sex == SexEnum::MALE ? self::HEMATOCRIT_MALE_MAX : self::HEMATOCRIT_FEMALE_MAX;
    }

    public static function getMCV($sex)
    {
        return $sex == SexEnum::MALE ?
            ['min' => self::MCV_MALE_MIN, 'max' => self::MCV_MALE_MAX] :
            ['min' => self::MCV_FEMALE_MIN, 'max' => self::MCV_FEMALE_MAX]
        ;
    }

    public static function getMCVMin($sex)
    {
        return $sex == SexEnum::MALE ? self::MCV_MALE_MIN : self::MCV_FEMALE_MIN;
    }

    public static function getMCVMax($sex)
    {
        return $sex == SexEnum::MALE ? self::MCV_MALE_MAX : self::MCV_FEMALE_MAX;
    }

    public static function getMCH()
    {
        return ['min' => self::MCH_MIN, 'max' => self::MCH_MAX];
    }

    public static function getMCHMin()
    {
        return self::MCH_MIN;
    }

    public static function getMCHMax()
    {
        return self::MCH_MAX;
    }

    public static function getMCHC()
    {
        return ['min' => self::MCHC_MIN, 'max' => self::MCHC_MAX];
    }

    public static function getMCHCMin()
    {
        return self::MCHC_MIN;
    }

    public static function getMCHCMax()
    {
        return self::MCHC_MAX;
    }

    public static function getLeukocytes()
    {
        return ['min' => self::LEUKOCYTES_MIN, 'max' => self::LEUKOCYTES_MAX];
    }

    public static function getLeukocytesMin()
    {
        return self::LEUKOCYTES_MIN;
    }

    public static function getLeukocytesMax()
    {
        return self::LEUKOCYTES_MAX;
    }

    public static function getLymphocytes()
    {
        return ['min' => self::LYMPHOCYTES_MIN, 'max' => self::LYMPHOCYTES_MAX];
    }

    public static function getLymphocytesMin()
    {
        return self::LYMPHOCYTES_MIN;
    }

    public static function getLymphocytesMax()
    {
        return self::LYMPHOCYTES_MAX;
    }

    public static function getMonocytes()
    {
        return ['min' => self::MONOCYTES_MIN, 'max' => self::MONOCYTES_MAX];
    }

    public static function getMonocytesMin()
    {
        return self::MONOCYTES_MIN;
    }

    public static function getMonocytesMax()
    {
        return self::MONOCYTES_MAX;
    }

    public static function getThrombocytes()
    {
        return ['min' => self::THROMBOCYTES_MIN, 'max' => self::THROMBOCYTES_MAX];
    }

    public static function getThrombocytesMin()
    {
        return self::THROMBOCYTES_MIN;
    }

    public static function getThrombocytesMax()
    {
        return self::THROMBOCYTES_MAX;
    }
}