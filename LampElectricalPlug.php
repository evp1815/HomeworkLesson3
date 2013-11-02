<?php

/**
 * Class LampElectricalPlug
 */
class LampElectricalPlug {
    private $type;

    public function setType($value)
    {
        $this->type = $value;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }
}