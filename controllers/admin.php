<?php

require_once 'property.php';
require_once './models/M_Admin.php';
require_once './views/view.php';

class ControllerAdmin extends ControllerProperty {

    private $admin;

    public function __construct() {
        parent::__construct();
        $this->admin = new Admin();
    }

    //affiche la page login
    public function displayLogin() {
        $loginView = new View("Login");
        $loginView->generer(["error" => false]);
    }

    public function adminLogin() {
        if (isset($_SESSION["auth"]["id"])) {
            $this->displayDashHome(); 
        } else {
           $id = $this->admin->isConnect($_POST["email"], $_POST["password"]);
            if($id) { 
                $_SESSION["auth"]["id"] = $id;

                $this->displayDashHome();

            } else {
                $loginView = new View("Login");
                $loginView->generer(["error" => true]);
            }
        }
    }

    public function adminLogout() {
        unset($_SESSION['auth']['id']);
        $this->displayClientHome();
    }
}