<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of visiteurDAO
 *
 * @author usersio
 */
class VisiteurDAO {

    private $table = 'visiteur';

    public function fetchAll() {
        
        $result = Api::fetchAll($this->table);
        
        $visiteurs = array();
        
        foreach ($result as $row) {
            $visiteurs['id'] = buildDomainObject($row);
        }
        
        return $visiteurs;
    }

    public function buildDomainObject($row) {
        
    }

}
