<?php

require_once './models/M_Property.php';
require_once './views/view.php';

class ControllerProperty {

    private $property;

    public function __construct() {
        $this->property = new Property();
    }

    //permet d'afficher la page ClientHome
    //titre - image des appartements et des maisons
    public function displayClientHome() {

    }

    //permet d'afficher la page DashBoardHome
    //titre - image des appartements et des maisons
    public function displayDashHome() {

    }
}