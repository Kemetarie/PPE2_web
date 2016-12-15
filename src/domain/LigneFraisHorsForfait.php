<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LigneFraisHorsForfait
 *
 * @author usersio
 */
namespace appliFrais\domain;

class LigneFraisHorsForfait {
   
    private $id;
    private $libelle;
    private $montant;
    private $date;
    
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
    
    public function getLibelle(){
        return $this->libelle;
    }
    public function setLibelle($libelle){
        $this->libelle=$libelle;
    }
}
