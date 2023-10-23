<?php



// require_once 'classes/Banque/Compte.php';
// require_once 'classes/Banque/CompteCourant.php';
// require_once 'classes/Banque/CompteEpargne.php';
// require_once 'classes/Client/Compte.php';

require_once 'classes/Autoloader.php';
use App\Autoloader;
Autoloader::register();


use App\Client\Compte as CompteClient;
use App\Banque\Client;
use App\Banque\CompteCourant as CompteCourant;
use App\Banque\CompteEpargne as CompteEpargne;

$compte1 = new CompteCourant("Stéphane", 1000, 500);


$compte1->setSolde(1500);
$afficherSolde = $compte1->getSolde();
echo "Le solde du compte est de " .$afficherSolde."€";
$compte1->setDecouvert(300);
$compte1->retirer(1900);
echo"<br>";
echo "Le montant après retrait est de : ".$compte1->getSolde()."€";


echo "<pre>";
var_dump($compte1);
echo "</pre>";


// COMPTE EPARGNE 

$compteEpargne1 = new CompteEpargne("Stéphane", 1500, 0.5);

$compteEpargne1->setSolde(1000);
echo "Le montant du compte sans interêt s'élève à : ". $compteEpargne1->getSolde();
echo "<br>";
$compteEpargne1->setTauxInteret(0.05);
$compteEpargne1->verserInteret(0.05);
echo "J'y ajoute ".$compteEpargne1->getTauxInteret()*100 ."% d'intrêt. Le montant du compte épargne sera alors de ".$compteEpargne1->getSolde() ."";

echo "<pre>";
var_dump($compteEpargne1);
echo "</pre>";


