<?php


//Star représentant une étoile (dans le sens "astronomique")
class Star
{
    public $name = '';
    public $diameter = null;
    public $mass = null;

    public $url = null;
    public $image = null;

    //le nom est obligatoire pour instancier un objet Star
    public function __construct($name)
    {
        $this->name = $name;
    }
}

