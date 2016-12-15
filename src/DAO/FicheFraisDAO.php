<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of FicheFraisDAO
 *
 * @author usersio
 */
namespace appliFrais\domain;

class FicheFraisDAO extends \Tools\DAO {
    
     private $table = 'fichefrais';

    public function fetchAll() {
        
        $result = Api::fetchAll($this->table);
        
        $ficheFrais = array();
        
        foreach ($result as $row) {
            $ficheFrais[$row['id']] = buildDomainObject($row);
        }
        
        return $ficheFrais;
    }
    
    public function fetchOne($id){
        
        $result = Api::fetchById($this->table,$id);
        
        $ficheFrais = array();
        
        foreach ($result as $row) {
            $ficheFrais[$row['id']] = buildDomainObject($row);
        }
        
        return $ficheFrais;
                
        
    }

    public function buildDomainObject($row) {
        $ficheFrais = new FicheFrais($row['id']);
        $ficheFrais->setMois($row['mois']);
        $ficheFrais->setNbHorsClassif($row['nbHorsClassif']);
        $ficheFrais->setMontantHorsClassif($row['montantHorsClassif']);       
        
        return $ficheFrais;
    }
    
}
/*
 *     private $id;
    private $mois;
    private $nbHorsClassif;
    private $montantHorsClassif;
    
 */