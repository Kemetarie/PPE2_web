<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TypeFrais
 *
 * @author usersio
 */
namespace appliFrais\domain;

class TypeFrais {

    private $id;
    private $libelle;
    private $forfait;
    
    
    public function getId(){
        return $this->id;
    }
    public function setId($id){
        $this->id=$id;
    }
    
    
    public function getLibelle(){
        return $this->libelle;
    }
    public function setLibelle($libelle){
        $this->libelle=$libelle;
    }
    
    
    public function getForfait(){
        return $this->forfait;
    }
    public function setForfait($forfait){
        $this->forfait=$forfait;
    }
    
}
