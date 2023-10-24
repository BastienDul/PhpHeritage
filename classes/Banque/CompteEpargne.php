<?php

namespace App\Banque;

use App\Client\Compte as CompteClient;
class CompteEpargne extends Compte{

    private float $tauxInteret;

    public function __construct(CompteClient $compte, float $solde, float $interet)
    {
        parent::__construct($compte, $solde);
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