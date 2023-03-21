<?php

require_once 'property.php';
require_once './models/M_Admin.php';
require_once './views/view.php';

class ControllerAdmin {

    private $admin;

    public function __construct() {
        $this->admin = new Admin();
    }

    //affiche la page login
    public function displayLogin() {
 
    }

    //recupere les infos donné a la page
    //les envoi et les compare a la bdd : 
    //true : page HomeDashboard + admin Connecté
    //false: message mauvais motdepasse/mail
    public function adminLogin() {

    }
}