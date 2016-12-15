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
namespace appliFrais\DAO;

class VisiteurDAO extends \Tools\DAO {

    private $table = 'visiteur';

    public function fetchAll() {
        
        $result = Api::fetchAll($this->table);
        
        $visiteurs = array();
        
        foreach ($result as $row) {
            $visiteurs[$row['id']] = buildDomainObject($row);
        }
        
        return $visiteurs;
    }
    
    public function fetchOne($id){
        
        $result = Api::fetchById($this->table,$id);
        
        $visiteur = array();
        
        foreach ($result as $row) {
            $visiteur[$row['id']] = buildDomainObject($row);
        }
        
        return $visiteur;
                
        
    }

    public function buildDomainObject($row) {
        $visiteur = new Visiteur($row['id']);
        $visiteur->setMatricule($row['matricule']);
        $visiteur->setNom($row['nom']);
        $visiteur->setAdresse($row['adresse']);
        $visiteur->setCodePostalodePostal($row['codePostal']);
        $visiteur->setVille($row['ville']);
        $visiteur->setDateEmbaucheauche($row['dateembauche']);
        $visiteur->setDepartement($row['departement_id']);
        $visiteur->setFicheFrais($row['fichefrais_id']);
        $visiteur->setSecteur($row['secteur_id']);
        
        return $visiteur;
    }
    /*
    private $matricule;
    private $nom;
    private $adresse;
    private $codePostal;
    private $ville;
    private $dateembauche;
    private $departement;
    private $fichefrais;
    private $secteur;
     */

}
