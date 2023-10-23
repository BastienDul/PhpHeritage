<?php

class CompteCourant extends Compte
{

    private $decouvert;


    public function __construct(string $titulaire, float $solde, float $decouvert)
    {
        parent::__construct($titulaire, $solde);
        $this->decouvert = $decouvert;
    }

    public function getDecouvert()
    {
        return $this->decouvert;
    }

    public function setDecouvert(float $montantDecouvert)
    {
        $this->decouvert = $montantDecouvert;
    }

    public function retirer(float $sommeARetirer)
    {

        $soldeRestant = parent::getSolde() + $this->getDecouvert();

        if ($sommeARetirer > 0 && $sommeARetirer <= $soldeRestant) {
            $nouveauSolde = parent::getSolde() - $sommeARetirer;
            return parent::setSolde($nouveauSolde);
        } else {
            return("Retrait impossible");
        }

        
    }
}
