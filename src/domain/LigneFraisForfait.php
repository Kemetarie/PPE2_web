<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LigneFraisForfait
 *
 * @author usersio
 */
namespace appliFrais\domain;

class LigneFraisForfait {
        
    
    private $id;
    private $montant;
    private $date;
    private $quantite;
    private $typefrais;
    private $fichefrais;
    
            
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }
    
    public function getMontant(){
        return $this->montant;
    }
    public function setMontant($montant){
        $this->montant=$montant;
    }
    
    public function getDate(){
        return $this->date;
    }
    public function setDate($date){
        $this->date=$date;
    }
    
    public function getQuantite(){
        return $this->quantite;
    }
    public function setQuantite($quantite){
        $this->quantite=$quantite;
    }
    
    public function getTypeFrais(){
        return $this->typefrais;
    }
    public function setTypeFrais($typeFrais){
        $this->typefrais=$typeFrais;
    }
    
    public function getFicheFrais(){
        return $this->fichefrais;
    }
    public function setFicheFrais($ficheFrais){
        $this->fichefrais=$ficheFrais;
    }
    
            
            
}
