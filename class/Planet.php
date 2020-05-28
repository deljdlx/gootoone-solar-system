<?php


class Planet
{
    public $name = '';
    public $diameter = null;
    public $mass = null;
    public $satellites = 0;
    public $type = '';

    public $url = null;
    public $image = null;
    public $symbol = null;

    //le nom est obligatoire pour instancier un objet Planet
    public function __construct($name)
    {
        $this->name = $name;
    }
}

