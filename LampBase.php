<?php

/**
 * Class LampBase
 */
class LampBase {
    private $bulb;

    /**
     * @return mixed
     */
    public function getBulb()
    {
        return $this->bulb;
    }

    /**
     * @param mixed $lamp
     */
    public function setBulb($lamp)
    {
        $this->bulb = $lamp;
    }

}