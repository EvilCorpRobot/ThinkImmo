<?php

require_once 'property.php';
require_once './models/M_Flat.php';
require_once "./models/M_Picture.php";
require_once './views/view.php';

class ControllerFlat extends ControllerProperty {
   
    private $flat;
    private $pictures;

    public function __construct() {
        parent::__construct();
        $this->flat = new Flat();
        $this->pictures = new Picture();
    }

    //affiche vue Description Flat Client
    public function displayFlatClient() 
    {
        $idProperty = $_GET['id_property'];
        // echo $idProperty;

        $flatAllInfo = $this->flat->get_FlatAllInfo($idProperty);

        $vue = new View("FlatClient");
        $vue->generer(["flatAllInfo" => $flatAllInfo]);
    }

    //affiche vue Description Flat DashBoard
    public function displayFlatDashboard() {
        $idProperty = $_GET['id_property'];
        // echo $idProperty;

        $flatAllInfo = $this->flat->get_FlatAllInfo($idProperty);

        $vue = new View("FlatDash");
        $vue->generer(["flatAllInfo" => $flatAllInfo]);
    }

    //affiche vue Creation d'appartement
    public function displayFlatCreate() {
        $vue = new View('Flat_Create');
        $vue->generer(["error" => "error"]);
    }

    //affiche vue Modification d'appartement
    public function displayFlatUpdate() {
        $idProperty = $_GET["id_property"];

        $flatInfo = $this->flat->get_FlatAllInfo($idProperty);

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

            $result = $this->flat->add_Flat(  $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, $kitchen, $parking, $exterior, $price, $parcel, $floorNumber);

            $extension = pathinfo($_FILES['picture1']['name'], PATHINFO_EXTENSION);
            $newFileName = "propriete_" . $result . "_1." . $extension;
            $uploadFileDir = './assets/propertiesPictures/propriete_' . $result . "/";
            mkdir($uploadFileDir);
            move_uploaded_file($_FILES['picture1']['tmp_name'], $uploadFileDir . $newFileName);

            $this->pictures->addPictures($result, $uploadFileDir . $newFileName);

            $extension = pathinfo($_FILES['picture2']['name'], PATHINFO_EXTENSION);
            $newFileName = "propriete_" . $result . "_2." . $extension;
            $uploadFileDir = './assets/propertiesPictures/propriete_' . $result . "/";
            move_uploaded_file($_FILES['picture2']['tmp_name'], $uploadFileDir . $newFileName);

            $this->pictures->addPictures($result, $uploadFileDir . $newFileName);

            $extension = pathinfo($_FILES['picture3']['name'], PATHINFO_EXTENSION);
            $newFileName = "propriete_" . $result . "_3." . $extension;
            $uploadFileDir = './assets/propertiesPictures/propriete_' . $result . "/";
            
            move_uploaded_file($_FILES['picture3']['tmp_name'], $uploadFileDir . $newFileName);
            
            $this->pictures->addPictures($result, $uploadFileDir . $newFileName);
            
            
            $this->displayDashHome();
        }
    }

    //supprime en Bdd un appartement
    public function deleteFlat() {
        
    }

    //met a jour en Bdd un appartement
    public function updateFlat() {
                    
        $flatId = $_GET["id_property"];

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

            $this->flat->update_Flat($flatId, $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, $kitchen, $parking, $exterior, $price, $parcel, $floorNumber);
            $result = $flatId;
            $dirname = './assets/propertiesPictures/propriete_' . $result . "/";
            array_map('unlink', glob("$dirname/*.*"));
            rmdir('./assets/propertiesPictures/propriete_' . $result . "/");
            $extension = pathinfo($_FILES['picture1']['name'], PATHINFO_EXTENSION);
            $newFileName = "propriete_" . $result . "_1." . $extension;
            $uploadFileDir = './assets/propertiesPictures/propriete_' . $result . "/";
            mkdir($uploadFileDir);
            move_uploaded_file($_FILES['picture1']['tmp_name'], $uploadFileDir . $newFileName);

            $this->pictures->updatePictures($result, $uploadFileDir . $newFileName);

            $extension = pathinfo($_FILES['picture2']['name'], PATHINFO_EXTENSION);
            $newFileName = "propriete_" . $result . "_2." . $extension;
            $uploadFileDir = './assets/propertiesPictures/propriete_' . $result . "/";
            move_uploaded_file($_FILES['picture2']['tmp_name'], $uploadFileDir . $newFileName);

            $this->pictures->updatePictures($result, $uploadFileDir . $newFileName);

            $extension = pathinfo($_FILES['picture3']['name'], PATHINFO_EXTENSION);
            $newFileName = "propriete_" . $result . "_3." . $extension;
            $uploadFileDir = './assets/propertiesPictures/propriete_' . $result . "/";
            
            move_uploaded_file($_FILES['picture3']['tmp_name'], $uploadFileDir . $newFileName);
            
            $this->pictures->updatePictures($result, $uploadFileDir . $newFileName);
        }
        $this->displayDashHome();
    }
}