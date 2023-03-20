<?php

require_once 'admin.php';
require_once 'flat.php';
require_once 'house.php';
require_once 'pictures.php';
require_once '././views/vue.php';

class Routeur {

    private $ctrlAdmin;
    private $ctrlProperty;
    private $ctrlPictures;
    private $ctrlHouse;
    private $ctrlFlat;

    public function __construct() {

        $this->ctrlAdmin = new ControllerAdmin();
        $this->ctrlProperty = new ControllerProperty();
        $this->ctrlPictures = new ControllerPictures();
        $this->ctrlHouse = new ControllerHouse();
        $this->ctrlFlat = new ControllerFlat();
    }

    public function routerRequete() {
            try {
                if (isset($_GET['action'])) {
                    if($_GET['action'] == 'displayLogin') {
                        $this->ctrlAdmin->displayLogin();
                    } else
                    if($_GET['action'] == 'adminLogin') {
                        $this->ctrlAdmin->adminLogin();
                    } else
                    if($_GET['action'] == 'displayDashHome') {
                        $this->ctrlProperty->displayDashHome();
                    } else
                    if($_GET['action'] == 'getPicture') {
                        $this->ctrlPictures->getPicture();
                    } else
                    if($_GET['action'] == 'addPicture') {
                        $this->ctrlPictures->addPicture();
                    } else
                    if($_GET['action'] == 'deletePicture') {
                        $this->ctrlPictures->deletePicture();
                    } else
                    if($_GET['action'] == 'updatePicture') {
                        $this->ctrlPictures->updatePicture();
                    } else
                    if($_GET['action'] == 'displayHouseClient') {
                        $this->ctrlHouse->displayHouseClient();
                    } else
                    if($_GET['action'] == 'displayHouseDashboard') {
                        $this->ctrlHouse->displayHouseDashboard();
                    } else
                    if($_GET['action'] == 'getHouse') {
                        $this->ctrlHouse->getHouse();
                    } else
                    if($_GET['action'] == 'addHouse') {
                        $this->ctrlHouse->addHouse();
                    } else
                    if($_GET['action'] == 'deleteHouse') {
                        $this->ctrlHouse->deleteHouse();
                    } else
                    if($_GET['action'] == 'updateHouse') {
                        $this->ctrlHouse->updateHouse();
                    } else
                    if($_GET['action'] == 'displayFlatClient') {
                        $this->ctrlFlat->displayFlatClient();
                    } else
                    if($_GET['action'] == 'displayFlatDashboard') {
                        $this->ctrlFlat->displayFlatDashboard();
                    } else
                    if($_GET['action'] == 'getFlat') {
                        $this->ctrlFlat->getFlat();
                    } else
                    if($_GET['action'] == 'addFlat') {
                        $this->ctrlFlat->addFlat();
                    } else
                    if($_GET['action'] == 'deleteFlat') {
                        $this->ctrlFlat->deleteFlat();
                    } else
                    if($_GET['action'] == 'updateFlat') {
                        $this->ctrlFlat->updateFlat();
                    }
            } else {
                $this->ctrlProperty->displayClientHome(); //action par default
            }
        } catch (Exception $e) {
            $this->erreur($e->getMessage());
        }
    }

    private function erreur($msgErreur) {
        $vue = new Vue("Erreur");
        $vue->generer(array('msgErreur' => $msgErreur));
    }

}