<?php
namespace appliFrais\domain;
class FicheFrais{
    
    private $id;
    private $mois;
    private $nbHorsClassif;
    private $montantHorsClassif;
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }
    
      public function getMois(){
        return $this->mois;
    }
    public function setMois($mois){
        $this->mois=$mois;
    }
    
      public function getNbHorsClassif(){
        return $this->nbHorsClassif;
    }
    public function setNbHorsClassif($nbHorsClassif){
        $this->nbHorsClassif=$nbHorsClassif;
    }
    
      public function getMontantHorsClassif(){
        return $this->montantHorsClassif;
    }
    public function setMontantHorsClassif($montantHorsClassif){
        $this->montantHorsClassif=$montantHorsClassif;
    }
        
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

