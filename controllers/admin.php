<?php

require_once './models/M_Admin.php';
require_once './views/view.php';

class ControllerAdmin {

    private $admin;
    public function __construct() {
        $this->admin = new Admin();
    }

    //affiche la page login
    public function displayLogin() {
        $loginView = new View("Login");
        $loginView->generer(["error" => false]);
    }

    public function adminLogin() {
        $id = $this->admin->isConnect($_POST["email"], $_POST["password"]);
        if($id) {
            session_start();
            $_SESSION["auth"]["id"] = $id;
            echo "hello";
        } else {
            $loginView = new View("Login");
            $loginView->generer(["error" => true]);
        }
    }
}