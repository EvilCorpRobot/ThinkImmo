<?php

require_once './models/M_House.php';
require_once './views/vue.php';

class ControllerHouse {

    private $picture;

    public function __construct() {
        $this->picture = new Picture();
    }

    //affiche vue Description House Client
    public function displayHouseClient() {

    }

    //affiche vue Description House DashBoard
    public function displayHouseDashboard() {

    }

    //recupere en Bdd une maison
    public function gethouse() {

    }

    //ajoute en Bdd une maison
    public function addHouse() {

    }

    //suprrime en Bdd une maison
    public function deleteHouse() {

    }

    //met a jour en Bdd une maison
    public function updateHouse() {

    }
}