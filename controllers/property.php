<?php

require_once './models/M_Property.php';
require_once './views/vue.php';

class ControllerProperty {

    private $property;

    public function __construct() {
        $this->property = new Property();
    }

    //permet d'afficher la page ClientHome
    //titre - image
    public function displayClientHome() {

    }

    //permet d'afficher la page DashBoardHome
    //titre - image
    public function displayDashHome() {

    }
}