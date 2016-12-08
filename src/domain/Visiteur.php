<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of visiteur
 *
 * @author usersio
 */
class visiteur {
    
    private $id;
    private $matricule;
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;
    private $dateembauche;
    private $departement_id;
    private $fichefrais_id;
    private $secteur_id;
    
    public function setId($id){
        $this->id=$id;
    }
    
    public function getId(){
        return $this->id;
    }

    public function setMatricule($matricule) {
        $this->matricule=$matricule;
    }
    
     public function getMatricule(){
        return $this->matricule;
    }

    
    public function setNom($nom) {
        $this->matricule=$nom;
    }
    
     public function getNom(){
        return $this->nom;
    }

    
    public function setadresse($adresse) {
        $this->matricule=$adresse;
    }
    
     public function getAdresse(){
        return $this->adresse;
    }

    
    public function setcodePostal($codePostal) {
        $this->matricule=$codePostal;
    }
    
     public function getCodePostal(){
        return $this->codePostal;
    }

    
    public function setVille($ville) {
        $this->matricule=$ville;
    }
    
     public function getVille(){
        return $this->ville;
    }

    
    public function setdateembauche($dateembauche) {
        $this->matricule=$dateembauche;
    }
    
     public function getDateEmbauche(){
        return $this->dateembauche;
    }

    
    public function setFicheFrais_id($fichefrais_id) {
        $this->matricule=$fichefrais_id;
    }
    
     public function getFicheFrais_id(){
        return $this->fichefrais_id;
    }

    
    public function setDepartement_id($departement_id) {
        $this->matricule=$departement_id;
    }
    
     public function getDepartement_id(){
        return $this->departement_id;
    }

    public function setSecteur_id($secteur_id) {
        $this->matricule=$secteur_id;
    }
    
     public function getSecteur_id(){
        return $this->secteur_id;
    }

}
