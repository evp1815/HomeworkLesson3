<?php

/**
 * Class LampFactory
 */
class LampFactory {

    /**
     * @return TableLamp Lamp with white halogen Bulb, eur Electrical plug, black 50cm Cable, silver Plafond
     */
    public static function getLamp()
    {
        $bulb = new LampBulb();
        $bulb->setType("halogen");
        $bulb->setColor("white");
        $bulb->setPower(60);

        $base = new LampBase();
        $base->setBulb($bulb);

        $plug = new LampElectricalPlug();
        $plug->setType("eur");

        $cable = new LampCable();
        $cable->setColor("black");
        $cable->setLength(50);
        $cable->setPlug($plug);

        $plafond = new LampPlafond();
        $plafond->setColor("silver");

        $rheostat = new LampRheostat();
        $rheostat->setPower(0);

        $lamp = new TableLamp();
        $lamp->setBase($base);
        $lamp->setCable($cable);
        $lamp->setPlafond($plafond);
        $lamp->setRheostat($rheostat);

        return $lamp;
    }

}