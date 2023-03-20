<?php

require_once './models/M_Picture.php';
require_once './views/vue.php';

class ControllerPictures {

    private $picture;

    public function __construct() {
        $this->picture = new Picture();
    }

    //recupere une photo, (ou plusieurs) photo
    public function getPicture($many = false) {

    }

    //ajoute une photo 
    public function addPicture() {

    }

    //supprime une photo 
    public function deletepicture() {

    }

    //met a jour une photo 
    public function updatePicture() {

    }
}