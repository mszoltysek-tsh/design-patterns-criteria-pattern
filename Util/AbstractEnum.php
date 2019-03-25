<?php


abstract class AbstractEnum
{
    protected $values = [];

    public function getValues()
    {
        return $this->values;
    }
}