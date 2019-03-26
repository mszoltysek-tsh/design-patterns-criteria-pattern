<?php

namespace Model\Address;

class Address
{
    /**
     * @var string
     */
    private $addressPart1;

    /**
     * @var string
     */
    private $addressPart2;

    /**
     * @var string
     */
    private $city;

    /**
     * @var string
     */
    private $country;

    /**
     * @return string
     */
    public function getAddressPart1()
    {
        return $this->addressPart1;
    }

    /**
     * @param string $addressPart1
     *
     * @return Address
     */
    public function setAddressPart1($addressPart1)
    {
        $this->addressPart1 = $addressPart1;
        return $this;
    }

    /**
     * @return string
     */
    public function getAddressPart2()
    {
        return $this->addressPart2;
    }

    /**
     * @param string $addressPart2
     *
     * @return Address
     */
    public function setAddressPart2($addressPart2)
    {
        $this->addressPart2 = $addressPart2;
        return $this;
    }

    /**
     * @return string
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param string $city
     *
     * @return Address
     */
    public function setCity($city)
    {
        $this->city = $city;
        return $this;
    }

    /**
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * @param string $country
     *
     * @return Address
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }
}