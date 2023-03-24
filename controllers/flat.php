<?php

require_once 'property.php';
require_once './models/M_Flat.php';
require_once './views/view.php';

class ControllerFlat extends ControllerProperty {
   
    private $flat;

    public function __construct() {
        parent::__construct();
        $this->flat = new Flat();
    }

    //affiche vue Description Flat Client
    public function displayFlatClient() {
        $vue = new View("FlatClient");
        $vue->generer(["error", "error"]);
        // index.php?action=displayFlatClient
    }

    //affiche vue Description Flat DashBoard
    public function displayFlatDashboard() {
        
    }

    //affiche vue Creation d'appartement
    public function displayFlatCreate() {
        $vue = new View('Flat_Create');
        $vue->generer(["error" => "error"]);
    }

    //affiche vue Modification d'appartement
    public function displayFlatUpdate() {
        $flatInfo = $this->getFlat();

        $vue = new View("Flat_Update");
        $vue->generer(['flatInfo' => $flatInfo]);
    }


    //recupere en Bdd un appartement
    public function getFlat() {
        $flatInfo = $this->flat->get_Flat();
        return $flatInfo;
    }

    //ajoute en Bdd un appartement
    public function addFlat() {
       
        if(isset($_POST)) {

            $contract = $_POST['contract'];
            $title = $_POST['title'];
            // $picture = $_POST['picture'];
            $address = $_POST['address'];
            $description = $_POST['description'];
            $type = $_POST['type'];
            $area = $_POST['area'];
            $charge = $_POST['charge'];
            $rooms = $_POST['rooms'];
            $epd = $_POST['epd'];
            $kitchen = $_POST['kitchen'];
            $parking = $_POST['parking'];
            $exterior = $_POST['exterior'];
            $parcel = $_POST['parcel'];
            $floorNumber = $_POST['floorNumber'];
            $price = $_POST['price'];

            $this->flat->add_Flat(  $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                    $kitchen, $parking, $exterior, $price, $parcel, $floorNumber);
            
            $this->displayDashHome();
        }
    }

    //supprime en Bdd un appartement
    public function deleteFlat() {
        
    }

    //met a jour en Bdd un appartement
    public function updateFlat() {
                    
        $flatId = 4;

        if(isset($_POST)) {

            $contract = $_POST['contract'];
            $title = $_POST['title'];
            // $picture = $_POST['picture'];
            $address = $_POST['address'];
            $description = $_POST['description'];
            $type = $_POST['type'];
            $area = $_POST['area'];
            $charge = $_POST['charge'];
            $rooms = $_POST['rooms'];
            $epd = $_POST['epd'];
            $kitchen = $_POST['kitchen'];
            $parking = $_POST['parking'];
            $exterior = $_POST['exterior'];
            $parcel = $_POST['parcel'];
            $floorNumber = $_POST['floorNumber'];
            $price = $_POST['price'];

            $this->flat->update_Flat($flatId, $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                     $kitchen, $parking, $exterior, $price, $parcel, $floorNumber);
            
            $this->displayDashHome();
        }
    }
}