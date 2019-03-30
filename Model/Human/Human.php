<?php

namespace Model\Human;

use DateTime;
use Model\Address\Address;

class Human
{
    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var Address
     */
    protected $address;

    /**
     * @var \DateTime
     */
    protected $birthDate;

    /**
     * @var string
     * @see HumanRaceEnum
     */
    protected $race;

    /**
     * @var string
     * @see SexEnum
     */
    protected $sex;

    /**
     * @var int
     */
    protected $pesel;

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     *
     * @return Human
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     *
     * @return Human
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }

    /**
     * @param DateTime $birthDate
     *
     * @return Human
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;
        return $this;
    }

    /**
     * @return string
     */
    public function getRace()
    {
        return $this->race;
    }

    /**
     * @param string $race
     *
     * @return Human
     */
    public function setRace($race)
    {
        $this->race = $race;
        return $this;
    }

    /**
     * @return string
     */
    public function getSex()
    {
        return $this->sex;
    }

    /**
     * @param string $sex
     *
     * @return Human
     */
    public function setSex($sex)
    {
        $this->sex = $sex;
        return $this;
    }

    /**
     * @return int
     */
    public function getPesel()
    {
        return $this->pesel;
    }

    /**
     * @param int $pesel
     *
     * @return Human
     */
    public function setPesel($pesel)
    {
        $this->pesel = $pesel;
        return $this;
    }

    /**
     * @return Address
     */
    public function getAddress(): Address
    {
        return $this->address;
    }

    /**
     * @param Address $address
     *
     * @return Human
     */
    public function setAddress(Address $address): Human
    {
        $this->address = $address;
        return $this;
    }
}