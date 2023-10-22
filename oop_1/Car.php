<?php

class Car
{
    public $name;
    public $number;
    public $color;

    public function __construct($name, $number, $color)
    {
        $this->name = $name;
        $this->number = $number;
        $this->color = $color;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getNumber()
    {
        return $this->number;
    }
    
    public function getColor()
    {
        return $this->color;
    }

    public function setName($carname)
    {
        $this->name = $carname;
    }

    public function setNumber($carnumber)
    {
        $this->number = $carnumber;
    }

    public function setColor($carcolor)
    {
        $this->color = $carcolor;
    }

    public function information()
    {
        return "車の車種:{$this->name}" . PHP_EOL .
        "車体番号:{$this->number}" . PHP_EOL .
        "カラー:{$this->color}" . PHP_EOL;
    }
}
