<?php

require_once '././views/vue.php';

class ControllerAdmin {

    private $email;
    private $password;

    public function __construct() {
        $email = 'null';
        $password = 'null';
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