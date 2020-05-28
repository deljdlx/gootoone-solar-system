<?php

//cette classe représente un système stéllaire , comme le "système solaire par exemple"
class StellarSystem
{
    public $name = '';
    public $age = null;
    //un système stéllaire a une étoile
    public $star;
    //un système stéllaire peut avoir des planètes
    public $planets = [];

    public $url = null;
    public $image = null;

    //il faut obligatoirement donner un "nom" à notre système au moment du new (instanciation)
    public function __construct($name)
    {
        $this->name = $name;
    }

    //méthode pour renseigner qu'elle est l'étoile du système
    public function setStar($star)
    {
        $this->star = $star;
    }

    //méthode pour ajouter une planète au système
    public function addPlanet($planet)
    {
        $this->planets[] = $planet;
    }

    public function getStar()
    {
        return $this->star;
    }

    public function getPlanets()
    {
        return $this->planets;
    }
}

