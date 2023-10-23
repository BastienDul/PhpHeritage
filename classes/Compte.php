<?php

abstract class Compte
{
    private $titulaire;

    private $solde;

    protected function __construct(string $titulaire, float $solde)
    {
        $this->titulaire = $titulaire;
        $this->solde = $solde;
    }


    protected function getTitulaire()
    {
        return $this->titulaire;
    }

    protected function setTitulaire($nomTitulaire)
    {
        return $this->titulaire = $nomTitulaire;    
    }

    public function setSolde(float $somme)
    {
        if ($somme > 0 || $somme != 0) {
            $this->solde = $somme;
    }
        return $this->solde ;
    }

    public function getSolde()
    {
        return $this->solde;
    }

}
