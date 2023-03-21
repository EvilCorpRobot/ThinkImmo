<?php

require_once './property.php';
require_once './models/M_Flat.php';
require_once './views/view.php';

class ControllerFlat extends ControllerProperty {
   
    private $flat;

    public function __construct() {
        parent::__construct();
        $this->flat = new Flat();
    }

    //affiche vue Description Flat Client
    public function displayFlatClient() {
        
    }

    //affiche vue Description Flat DashBoard
    public function displayFlatDashboard() {
        
    }

    //affiche vue Creation d'appartement
    public function displayFlatCreate() {

    }

    //affiche vue Modification d'appartement
    public function displayFlatUpdate() {

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