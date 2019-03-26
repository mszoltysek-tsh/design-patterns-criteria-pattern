<?php

namespace Model\Patient;

class BloodParameters
{
    /**
     * @var float
     */
    private $erythrocytes;

    /**
     * @var float
     */
    private $hemoglobin;

    /**
     * @var float
     */
    private $hematocrit;

    /**
     * @var int
     */
    private $MCV;

    /**
     * @var int
     */
    private $MCH;

    /**
     * @var int
     */
    private $MCHC;

    /**
     * @var float
     */
    private $leukocytes;

    /**
     * @var float
     */
    private $lymphocytes;

    /**
     * @var float
     */
    private $monocytes;

    /**
     * @var int
     */
    private $thrombocytes;

    /**
     * @return float
     */
    public function getErythrocytes()
    {
        return $this->erythrocytes;
    }

    /**
     * @param float $erythrocytes
     *
     * @return BloodParameters
     */
    public function setErythrocytes($erythrocytes)
    {
        $this->erythrocytes = $erythrocytes;
        return $this;
    }

    /**
     * @return float
     */
    public function getHemoglobin()
    {
        return $this->hemoglobin;
    }

    /**
     * @param float $hemoglobin
     *
     * @return BloodParameters
     */
    public function setHemoglobin($hemoglobin)
    {
        $this->hemoglobin = $hemoglobin;
        return $this;
    }

    /**
     * @return float
     */
    public function getHematocrit()
    {
        return $this->hematocrit;
    }

    /**
     * @param float $hematocrit
     *
     * @return BloodParameters
     */
    public function setHematocrit($hematocrit)
    {
        $this->hematocrit = $hematocrit;
        return $this;
    }

    /**
     * @return int
     */
    public function getMCV()
    {
        return $this->MCV;
    }

    /**
     * @param int $MCV
     *
     * @return BloodParameters
     */
    public function setMCV($MCV)
    {
        $this->MCV = $MCV;
        return $this;
    }

    /**
     * @return int
     */
    public function getMCH()
    {
        return $this->MCH;
    }

    /**
     * @param int $MCH
     *
     * @return BloodParameters
     */
    public function setMCH($MCH)
    {
        $this->MCH = $MCH;
        return $this;
    }

    /**
     * @return int
     */
    public function getMCHC()
    {
        return $this->MCHC;
    }

    /**
     * @param int $MCHC
     *
     * @return BloodParameters
     */
    public function setMCHC($MCHC)
    {
        $this->MCHC = $MCHC;
        return $this;
    }

    /**
     * @return float
     */
    public function getLeukocytes()
    {
        return $this->leukocytes;
    }

    /**
     * @param float $leukocytes
     *
     * @return BloodParameters
     */
    public function setLeukocytes($leukocytes)
    {
        $this->leukocytes = $leukocytes;
        return $this;
    }

    /**
     * @return float
     */
    public function getLymphocytes()
    {
        return $this->lymphocytes;
    }

    /**
     * @param float $lymphocytes
     *
     * @return BloodParameters
     */
    public function setLymphocytes($lymphocytes)
    {
        $this->lymphocytes = $lymphocytes;
        return $this;
    }

    /**
     * @return float
     */
    public function getMonocytes()
    {
        return $this->monocytes;
    }

    /**
     * @param float $monocytes
     *
     * @return BloodParameters
     */
    public function setMonocytes($monocytes)
    {
        $this->monocytes = $monocytes;
        return $this;
    }

    /**
     * @return int
     */
    public function getThrombocytes()
    {
        return $this->thrombocytes;
    }

    /**
     * @param int $thrombocytes
     *
     * @return BloodParameters
     */
    public function setThrombocytes($thrombocytes)
    {
        $this->thrombocytes = $thrombocytes;
        return $this;
    }
}