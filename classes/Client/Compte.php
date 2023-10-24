<?php

// Déclaration de l'espace de noms pour la classe Compte dans l'application Client
namespace App\Client;

// Définition de la classe Compte
class Compte
{
    // Déclaration des propriétés privées pour le nom et le prénom
    private $nom; // Représente le nom du compte
    private $prenom; // Représente le prénom du compte

    private $telephone;

    // Constructeur de la classe pour initialiser les valeurs du nom et du prénom
    public function __construct(string $nom,string $prenom, string $telephone)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->telephone = $telephone;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }


    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }
}