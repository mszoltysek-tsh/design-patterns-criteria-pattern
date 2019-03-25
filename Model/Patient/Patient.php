<?php

class Patient extends Human
{
    /**
     * @var int
     */
    private $height;

    /**
     * @var int
     */
    private $waistWidth;

    /**
     * @var int
     */
    private $chestWidth;

    /**
     * @var string
     * @see EyeColorEnum
     */
    private $eyeColor;

    /**
     * @var string
     * @see BloodTypeEnum
     */
    private $bloodType;

    /**
     * @var int
     */
    private $systolicPressure;

    /**
     * @var int
     */
    private $diastolicPressure;

    /**
     * @var \DateTime
     */
    private $insuranceEndDate;

    /**
     * @var BloodParameters
     */
    private $bloodParameters;

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @param int $height
     *
     * @return Patient
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int
     */
    public function getWaistWidth()
    {
        return $this->waistWidth;
    }

    /**
     * @param int $waistWidth
     *
     * @return Patient
     */
    public function setWaistWidth($waistWidth)
    {
        $this->waistWidth = $waistWidth;
        return $this;
    }

    /**
     * @return int
     */
    public function getChestWidth()
    {
        return $this->chestWidth;
    }

    /**
     * @param int $chestWidth
     *
     * @return Patient
     */
    public function setChestWidth($chestWidth)
    {
        $this->chestWidth = $chestWidth;
        return $this;
    }

    /**
     * @return string
     */
    public function getEyeColor()
    {
        return $this->eyeColor;
    }

    /**
     * @param string $eyeColor
     *
     * @return Patient
     */
    public function setEyeColor($eyeColor)
    {
        $this->eyeColor = $eyeColor;
        return $this;
    }

    /**
     * @return string
     */
    public function getBloodType()
    {
        return $this->bloodType;
    }

    /**
     * @param string $bloodType
     *
     * @return Patient
     */
    public function setBloodType($bloodType)
    {
        $this->bloodType = $bloodType;
        return $this;
    }

    /**
     * @return int
     */
    public function getSystolicPressure()
    {
        return $this->systolicPressure;
    }

    /**
     * @param int $systolicPressure
     *
     * @return Patient
     */
    public function setSystolicPressure($systolicPressure)
    {
        $this->systolicPressure = $systolicPressure;
        return $this;
    }

    /**
     * @return int
     */
    public function getDiastolicPressure()
    {
        return $this->diastolicPressure;
    }

    /**
     * @param int $diastolicPressure
     *
     * @return Patient
     */
    public function setDiastolicPressure($diastolicPressure)
    {
        $this->diastolicPressure = $diastolicPressure;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getInsuranceEndDate()
    {
        return $this->insuranceEndDate;
    }

    /**
     * @param DateTime $insuranceEndDate
     *
     * @return Patient
     */
    public function setInsuranceEndDate($insuranceEndDate)
    {
        $this->insuranceEndDate = $insuranceEndDate;
        return $this;
    }

    /**
     * @return BloodParameters
     */
    public function getBloodParameters()
    {
        return $this->bloodParameters;
    }

    /**
     * @param BloodParameters $bloodParameters
     *
     * @return Patient
     */
    public function setBloodParameters($bloodParameters)
    {
        $this->bloodParameters = $bloodParameters;
        return $this;
    }
}