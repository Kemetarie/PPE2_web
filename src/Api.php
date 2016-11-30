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
    
    static function fetchByForeign($table, $tableForeign, $id) {
        return json_decode(urldecode('172.21.4.10/goVoiture/foreign/'.$table.'/'.$tableForeign.'/'.$id));
    }
}
