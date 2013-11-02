<?php

/**
 * Class LampCable
 */
class LampCable {
    private $length;
    private $color;
    private $plug;

    /**
     * @return mixed
     */
    public function getLength()
    {
        return $this->length;
    }

    /**
     * @param mixed $length
     */
    public function setLength($length)
    {
        $this->length = $length;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color)
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getPlug()
    {
        return $this->plug;
    }

    /**
     * @param mixed $plug
     */
    public function setPlug($plug)
    {
        $this->plug = $plug;
    }

}