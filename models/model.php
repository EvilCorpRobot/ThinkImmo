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
    }

    private function getBdd() {
        if($this->bdd == null) {
            $this->bdd = new PDO('mysql:host=localhost;dbname=thinkimmo;charset=utf8;root;Mt326')
        }
    }

}