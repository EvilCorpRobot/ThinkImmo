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

    }

    public function filterProperty() {
        $purchase = null;
        $rent = null;
        $house = null;
        $flat = null;
        
        if (isset($_POST["purchase"]) && $_POST["purchase"] == "on") {
            $purchase = true;
        }
        if (isset($_POST["rent"]) && $_POST["rent"] == "on") {
            $rent = true;
        }
        if (isset($_POST["house"]) && $_POST["house"] == "on") {
            $house = true;
        }
        if (isset($_POST["flat"]) && $_POST["flat"] == "on") {
            $flat = true;
        }

        $this->property->getPropertiesByFilter($purchase, $rent, $house, $flat, $_POST["room"], $_POST["area"], $_POST["pricemin"], $_POST["pricemax"], $_POST["location"]);
    }
}