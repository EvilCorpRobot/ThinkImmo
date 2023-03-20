<?php

require_once './models/M_Admin.php';
require_once './views/vue.php';

class ControllerAdmin {

    private $admin;

    public function __construct() {
        $this->admin = new Admin();
    }

    //affiche la page login
    public function displayLogin() {
        
    }

    //recupere les infos donné a la page
    //et les compare a la bdd : 
    //true : page HomeDashboard
    //false: message mauvais motdepasse/mail
    public function adminLogin() {

    }
}