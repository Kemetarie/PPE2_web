<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of LigneFraisHorsForfaitDAO
 *
 * @author usersio
 */

namespace appliFrais\DAO;


class LigneFraisHorsForfaitDAO extends \Tools\DAO  {
   
    private $table = 'lignefichefraishorsforfait';

    public function fetchAll() {
        
        $result = Api::fetchAll($this->table);
        
        $ligneFraisHorsForfait = array();
        
        foreach ($result as $row) {
            $ligneFraisHorsForfait[$row['id']] = buildDomainObject($row);
        }
        
        return $ligneFraisHorsForfait;
    }
    
    public function fetchOne($id){
        
        $result = Api::fetchById($this->table,$id);
        
        $ligneFraisHorsForfait = array();
        
        foreach ($result as $row) {
            $ligneFraisHorsForfait[$row['id']] = buildDomainObject($row);
        }
        
        return $ligneFraisHorsForfait;
                
        
    }

    public function buildDomainObject($row) {
        $ligneFraisHorsForfait = new \appliFrais\domain\LigneFraisHorsForfait($row['id']);
        $ligneFraisHorsForfait->setLibelle($row['libelle']);
        $ligneFraisHorsForfait->setMontant($row['montant']);
        $ligneFraisHorsForfait->setDate($row['date']);
        
        
        return $ligneFraisHorsForfait;
        
    }
}
