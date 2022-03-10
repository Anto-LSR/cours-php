<?php

class Ville2
{
    private $nom;
    private $departement;

    /**
     * @param $nom
     * @param $departement
     */
    public function __construct($nom, $departement)
    {
        $this->nom = $nom;
        $this->departement = $departement;
    }


}