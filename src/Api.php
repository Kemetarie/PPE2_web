<?php
/**
 * Classe pour utiliser l'api.
 */
class Api {
    
    /**
     * Trouver tout les enregistrement d'une table.
     * @param string $table         Nom de la table cible.
     * @return class table          Classe DAO des résultats.
     */
    static function fetchAll($table) {
        return json_decode(urldecode('172.21.4.10/goVoiture/all'.$table));
    }
    
    /**
     * Trouver l'enregistrement lié à une id de clé primaire.
     * @param string $table         Nom de la table cible.
     * @param int $id               Valeur de la clé primaire recherchée.
     * @return class table          Classe DAO du résultat.
     */
    
    static function fetchById($table, $id) {
        return json_decode(urldecode('172.21.4.10/goVoiture/id/'.$table.'/'+$id));
    }
    
    /**
     * Trouver les enregistrements liés à une id de clé étrangére.
     * @param string $table         Nom de la table cible.
     * @param string $tableForeign  Nom de la table de la clé étrangère.
     * @param int $id               Valeur de la clé étrangère recherchée.
     * @return class table          Classe DAO des résultats.
     */
    
    /**
     * Connection de l'utilisateur
     * @param string $user nom d'utilisateur
     * @param string $mdp  mot de passe EN MD5!
     * @return type
     */
    
    static function Connect($user, $mdp) {
        return urldecode('172.21.4.10/goVoiture/connect/'.$user.'/'.$mdp);
    }
    
    static function fetchByForeign($table, $tableForeign, $id) {
        return json_decode(urldecode('172.21.4.10/goVoiture/foreign/'.$table.'/'.$tableForeign.'/'.$id));
    }
    
    
    /**
     * insertion de typeFrais
     * @param array $row            Ligne d'enregistrement à ajouter (libelle, forfait)
     */
    static function insertTypeFrais($row) {
        urldecode('172.21.4.10/goVoiture/insertTypeFrais/'.$row[0].'/'.$row[1]);
    }
    /**
     * insertion de ficheFrais
     * @param array $row            Ligne d'enregistrement à ajouter (mois, nbHorsClassif, montantHorsClassif)
     */
         
    static function insertFicheFrais($row) {
        urldecode('172.21.4.10/goVoiture/insertFicheFrais/'.$row[0].'/'.$row[1].'/'.$row[2]);
    }
    /**
     * 
     * @param type $row Ligne d'enregistrement à ajouter (matricule, nom, adresse, codePostal, ville, dateEmbauche, departement_id, ficheFrais_id, secteur_id)
     */
    static function insertVisiteur($row) {
        urldecode('172.21.4.10/goVoiture/insertVisiteur/'.$row[0].'/'.$row[1].'/'.$row[2].'/'.$row[3].'/'.$row[4].'/'.$row[5].'/'.$row[6].'/'.$row[7]);
    }
    
}
