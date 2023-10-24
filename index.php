<?php



// require_once 'classes/Banque/Compte.php';
// require_once 'classes/Banque/CompteCourant.php';
// require_once 'classes/Banque/CompteEpargne.php';
// require_once 'classes/Client/Compte.php';

require_once 'classes/Autoloader.php';
use App\Autoloader;
use App\Client\Compte;
Autoloader::register();


use App\Client\Compte as CompteClient;
use App\Banque\Client;
use App\Banque\CompteCourant as CompteCourant;
use App\Banque\CompteEpargne as CompteEpargne;

$compteClient1 = new CompteClient("Stéphane", "Afpa", "0648331564");

echo "<pre>";
var_dump($compteClient1);
echo "</pre>";

$nom = $compteClient1->getNom();
$tel = $compteClient1->getTelephone();
echo 'Prénom : '.$nom.'<br> Numéro de tel : '. $tel;

echo "<hr>";


// Compte Courant

// $compte1 = new CompteCourant("Stéphane", 1000, 500);
$compteCourant1 = new CompteCourant($compteClient1, 1000, 500);

$nom = $compteCourant1->getTitulaire()->getNom();
$telephone = $compteCourant1->getTitulaire()->getTelephone();

echo 'Prénom : '.$nom.'<br> Numéro de tel : '. $tel;
echo"<br>";
$compteCourant1->setSolde(1500);
$afficherSolde = $compteCourant1->getSolde();
echo "Le solde du compte est de " .$afficherSolde."€";
$compteCourant1->setDecouvert(300);
$compteCourant1->retirer(1801);
echo"<br>";
echo "Le montant après retrait est de : ".$compteCourant1->getSolde()."€";


echo "<pre>";
var_dump($compteCourant1);
echo "</pre>";

echo "<hr>";

// COMPTE EPARGNE 

// $compteEpargne1 = new CompteEpargne("Stéphane", 1500, 0.5);
$compteEpargne1 = new CompteEpargne($compteClient1, 1500, 0.5);

$compteEpargne1->setSolde(1000);
echo "Le montant du compte sans interêt s'élève à : ". $compteEpargne1->getSolde();
echo "<br>";
$compteEpargne1->setTauxInteret(0.05);
$compteEpargne1->verserInteret(0.05);
echo "J'y ajoute ".$compteEpargne1->getTauxInteret()*100 ."% d'intrêt. Le montant du compte épargne sera alors de ".$compteEpargne1->getSolde() ."";

echo "<pre>";
var_dump($compteEpargne1);
echo "</pre>";

echo "<hr>";

// Compte 2

// $compte2 = new CompteClient("Doe", "John", "0241521472");

// echo "<pre>";
// var_dump($compte2);
// echo "</pre>";
