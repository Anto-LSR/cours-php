<?php
require_once ('ville.php');

class VilleAvecRegion extends ville
{
    private $region;

    public function __construct($nom, $departement, $region)
    {
        parent::__construct($nom, $departement);
        $this->region = $region;
    }

    public function afficher(){
        echo 'La ville ' . $this->getNom() . ' est dans le département ' . $this->getDepartement() . ' de la région ' . $this->region;
    }

}