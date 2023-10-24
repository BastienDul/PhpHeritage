<?php

namespace App\Banque;

use App\Client\Compte as CompteClient;

abstract class Compte
{
    protected CompteClient $titulaire;

    private $solde;

    public function __construct(CompteClient $compte, float $solde)
    {
        $this->titulaire = $compte;

        $this->solde = $solde;
    }


    public function getTitulaire(): CompteClient
    {
        return $this->titulaire;
    }

    public function setTitulaire(CompteClient $compte )
    {
        if (isset($compte)) {
            $this->titulaire = $compte;
        }
        return $this->titulaire = $compte;  
    }

    public function setSolde(float $somme)
    {
        if ($somme >= 0 || $somme != 0) {
            $this->solde = $somme;
    }
        return $this->solde ;
    }

    public function getSolde()
    {
        return $this->solde;
    }

}
