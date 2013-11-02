HomeworkLesson3
===============

DataArt

TableLamp - Настольная лампа с реостатом
Исполняемый файл Main.php

Компоненты:
    Цоколь - LampBase.php
    Шнур - LampCable.php
    Вилка - LampElectricalPlug.php
    Плафон - LampPlafond.php
    Реостат - LampRheostat.php
    Лампочка - LampBulb.Php

Состояния:
    Включена - TableLamp::getCondition
    Выключена - TableLamp::getCondition
    Включена на определенную мощность

Методы:
    Включить - TableLamp::on
    Выключить - TableLamp::off
    Включить на определенную мощность - TableLamp::setBrightness

Характеристики лампы:
    Тип лампочки - LampBulb::Type
    Цвет лампочки - LampBulb::Color
    Цвет плафона - LampPlafond::Color
    Цвет кабеля - LampCable::Color
    Тип вилки - LampElectricalPlug::Type
    Цвет цоколя - LampBase::Color
    Мощность лампочки - LampBulb::Power
    Длина шнура - LampCable::Length

Поведение:
    Включить лампу можно с помощью кнопки управления мощностью реостата.
    Яркость лампы регулируется кнопкой реостата.




