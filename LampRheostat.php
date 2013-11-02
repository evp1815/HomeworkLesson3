<?php

/**
 * Class LampRheostat
 */
class LampRheostat {
    private $power;

    /**
     * @return mixed
     */
    public function getPower()
    {
        return $this->power;
    }

    /**
     * @param mixed $power
     */
    public function setPower($power)
    {
        $this->power = $power;
    }

}