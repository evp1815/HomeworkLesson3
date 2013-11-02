<?php

/**
 * Class TableLamp
 */
class TableLamp {
    private $base;
    private $cable;
    private $plafond;
    private $rheostat;
    private $condition = false;

    /**
     * @param int $value
     */
    public function setBrightness($value = 0)
    {
        if ($value > 0){
            $this->rheostat->setPower($value);
            $this->condition = true;
        } else {
            $this->setCondition(false);
        }
    }

    public function on()
    {
        if (!$this->condition) {
            $this->setCondition(true);
        }
    }

    public function off()
    {
        if ($this->condition) {
            $this->setCondition(false);
        }
    }

    /**
     * @return mixed
     */
    public function getBase()
    {
        return $this->base;
    }

    /**
     * @param mixed $base
     */
    public function setBase($base)
    {
        $this->base = $base;
    }

    /**
     * @return mixed
     */
    public function getCable()
    {
        return $this->cable;
    }

    /**
     * @param mixed $cable
     */
    public function setCable($cable)
    {
        $this->cable = $cable;
    }


    /**
     * @return mixed
     */
    public function getPlafond()
    {
        return $this->plafond;
    }

    /**
     * @param mixed $plafond
     */
    public function setPlafond($plafond)
    {
        $this->plafond = $plafond;
    }

    /**
     * @return mixed
     */
    public function getRheostat()
    {
        return $this->rheostat;
    }

    /**
     * @param mixed $rheostat
     */
    public function setRheostat($rheostat)
    {
        $this->rheostat = $rheostat;
    }

    /**
     * @return boolean
     */
    private function getCondition()
    {
        return $this->condition;
    }

    /**
     * @param boolean $condition
     */
    private  function setCondition($condition)
    {
        if ($condition == true){
            $this->rheostat->setPower(100);
        } else {
            $this->rheostat->setPower(0);
        }
        $this->condition = $condition;
    }
}