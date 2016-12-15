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
namespace appliFrais\DAO;

class LigneFraisForfaitDAO extends \Tools\DAO  {
     private $table = 'ligneficheforfait';

    public function fetchAll() {
        
        $result = Api::fetchAll($this->table);
        
        $ligneFicheFrais = array();
        
        foreach ($result as $row) {
           $ligneFicheFrais[$row['id']] = buildDomainObject($row);
        }
        
        return $ligneFicheFrais;
    }
    
   

    public function buildDomainObject($row) {
        $ligneFicheFrais = new LigneFraisForfait($row['id']);
        $ligneFicheFrais->setMontant($row['montant']);
        $ligneFicheFrais->setDate($row['date']);
        $ligneFicheFrais->setQuantite($row['quantite']);
        $ligneFicheFrais->setTypeFrais($row['typefrais_id']);
        $ligneFicheFrais->setFicheFrais($row['fichefrais_id']);
       
        
        return $ligneFicheFrais;
    }
}
