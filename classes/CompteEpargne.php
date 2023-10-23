<?php

class CompteEpargne extends Compte{

    private float $tauxInteret;

    public function __construct(string $titulaire, float $solde, float $interet)
    {
        parent::__construct($titulaire, $solde);
        $this->tauxInteret = $interet;
    }

    public function getTauxInteret(){
        return $this->tauxInteret;
    }

    public function setTauxInteret(float $tauxInteret){
        $this->tauxInteret = $tauxInteret;
    }

    public function verserInteret(float $interetARajouter){
        
        
        if ($interetARajouter <= $this->getTauxInteret() && $interetARajouter > 0) {
            $calculSommeAvecInteret = parent::getSolde() * $interetARajouter;
            $sommeAvecInteret =  parent::getSolde() + $calculSommeAvecInteret;
            return parent::setSolde($sommeAvecInteret);
        }


        
    }


}