<?php

require_once "env.php";

abstract class Model {

    private $bdd;

    protected function executeRequest($sql, $params = null) {
        if ($params == null) {
            return $resultat = getBdd()->query($sql);
        } else {
            $resultat = getBdd()->prepare($sql);
            $resultat->execute($params);
            return $resultat->fetchAll();
        }
    }

    
}
