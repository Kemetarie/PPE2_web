<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of TypeFraisDAO
 *
 * @author usersio
 */
namespace appliFrais\DAO;

class TypeFraisDAO extends \Tools\DAO  {
    
    private $table = 'typefrais';

    public function fetchAll() {
        
        $result = Api::fetchAll($this->table);
        
        $typefrais = array();
        
        foreach ($result as $row) {
            $typefrais[$row['id']] = buildDomainObject($row);
        }
        
        return $visiteurs;
    }
    
    public function fetchOne($id){
        
        $result = Api::fetchById($this->table,$id);
        
        $typefrais = array();
        
        foreach ($result as $row) {
            $typefrais[$row['id']] = buildDomainObject($row);
        }
        
        return $typefrais;
                
        
    }

    public function buildDomainObject($row) {
        $typefrais = new TypeFrais($row['id']);
        $typefrais->setLibelle($row['libelle']);
        $typefrais->setForfait($row['forfait']);
        
        return $typefrais;
        
    }
    
}
