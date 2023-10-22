<?php

class Car
{
    public $carname;
    public $carnumber;
    public $carcolor;

    public function __construct($carname, $carnumber, $carcolor)
    {
        $this->carname = $carname;
        $this->carnumber = $carnumber;
        $this->carcolor = $carcolor;
    }

    public function getName()
    {
        return $this->carname;
    }

    public function getNumber()
    {
        return $this->carnumber;
    }
    
    public function getColor()
    {
        return $this->carcolor;
    }

    public function setName($carname)
    {
        $this->carname = $carname;
    }

    public function setNumber($carnumber)
    {
        $this->carname = $carnumber;
    }

    public function setColor($carcolor)
    {
        $this->carcolor = $carcolor;
    }

    public function information()
    {
        return "車の車種:{$this->carname}" . PHP_EOL .
        "車体番号:{$this->carnumber}" . PHP_EOL .
        "カラー:{$this->carcolor}" . PHP_EOL;
    }
}
