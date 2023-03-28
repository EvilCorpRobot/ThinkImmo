<?php

require_once "env.php";

abstract class Model {

    private $bdd;

    public function __construct()
    {
        $this->bdd = getBdd();
    }

    protected function executeRequest($sql, $params = null) {
        if ($params == null) {
            return $resultat = $this->bdd->query($sql)->fetchAll();
        } else {
            $resultat = $this->bdd->prepare($sql);
            $resultat->execute($params);
            
            return $resultat->fetchAll();
        }
    }

    public function getBdd() {
        return $this->bdd;
    }
    
}
