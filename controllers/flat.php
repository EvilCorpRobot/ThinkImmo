<?php

require_once './models/M_Flat.php';
require_once './views/vue.php';

class ControllerFlat {
   
    private $flat;

    public function __construct() {
        $this->flat = new Flat();
    }

    //affiche vue Description Flat Client
    public function displayFlatClient() {
        
    }

    //affiche vue Description Flat DashBoard
    public function displayFlatDashboard() {
        
    }

    //recupere en Bdd un appartement
    public function getFlat() {
        
    }

    //ajoute en Bdd un appartement
    public function addFlat() {
        
    }

    //supprime en Bdd un appartement
    public function deleteFlat() {
        
    }

    //met a jour en Bdd un appartement
    public function updateFlat() {
        
    }

}