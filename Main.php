<?php

/**
 * Table lamp with rheostat
 * @components:
 *  base
 *  cable
 *  electrical plug
 *  plafond
 *  rheostat
 *  bulb
 */
$lamp = LampFactory::getLamp();
//On lamp
$lamp->on();
//Set power of rheostat to 75%
$lamp->setBrightness(75);
//Off lamp
$lamp->off();
