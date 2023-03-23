<?php

require_once './models/M_Property.php';
require_once './models/M_Picture.php';
require_once './views/view.php';

class ControllerProperty {

    private $property;
    private $pictures;

    public function __construct() {
        $this->property = new Property();
        $this->pictures = new Picture();
    }

    //permet d'afficher la page ClientHome
    //titre - image des appartements et des maisons
    public function displayClientHome() {
        $properties = $this->property->getProperties();
        $pictures = $this->pictures->getFirstPictures();
        
        $vue = new View("ClientHome");
        $vue->generer(["properties" => $properties, "pictures" => $pictures]);
    }

    //permet d'afficher la page ClientHome apres filtrage
    //titre - image des appartements et des maisons
    public function displayClientResult() {

    }

    //permet d'afficher la page DashBoardHome
    //titre - image des appartements et des maisons
    public function displayDashHome() {
        $properties = $this->property->getProperties();
        $pictures = $this->pictures->getFirstPictures();
        
        $vue = new View("DashHome");
        $vue->generer(["properties" => $properties, "pictures" => $pictures]);
    }
}