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
class connexion {
    
    private $login;
    
    private $password;
    
    
    public function __construct($newLogin,$newPassword) {
        $this->login = $newLogin;
        $this->password = md5($newPassword);
        
    }
    
    public function getVerification(){
        return (api::Connect($this->login, $this->password)=='correct');
    }
}


