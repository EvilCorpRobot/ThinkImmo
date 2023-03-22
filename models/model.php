<?php

abstract class Model {

    private $bdd;

    protected function executeRequest($sql, $params = null) {
        if ($params == null) {
            $resultat = $this->getBdd()->query($sql);
        } else {
            $resultat = $this->getBdd()->prepare($sql);
            $resultat->execute($params);
        }
        return $resultat;
    }

    private function getBdd() {
        if($this->bdd == null) {
            $this->bdd = new PDO('mysql:host=localhost;dbname=thinkimmo;charset=utf8',
            'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
        }
        return $this->bdd;
    }
}
