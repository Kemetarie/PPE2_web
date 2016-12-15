<?php

namespace appliFrais\DAO;
use Doctrine\DBAL\Connection;
use appliFrais\domain;

abstract class DAO{
    
    private $db;
    private static $instance;
    
    public function __construct(Connection $db){
        $this->db = $db;
    }
    
    public static function getInstance(Connection $db){
        $class= get_called_class();
        if(!isset(self::$instance)){
            self::$instance = new $class($db);
        }
        return self::$instance;    
        
    }
    
    public function findAll($table){
        $sql='select * from '.$table;
        $result=$this->db->fetchAll($sql);
        
        
        $DAO=array();
        foreach ($result as $row){
            $DAO[$row['id']]=$this->build($row);
        }
        return $DAO;
    }
    
    abstract public function build(array $row);
}

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

