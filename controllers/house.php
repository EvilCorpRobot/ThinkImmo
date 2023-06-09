<?php

require_once './models/M_House.php';
require_once "./models/M_Picture.php";
require_once './views/view.php';

class ControllerHouse extends ControllerProperty
{

    private $house;
    private $pictures;

    public function __construct()
    {
        parent::__construct();
        $this->house = new House();
        $this->pictures = new Picture();
    }

    //affiche vue Description House Client
    public function displayHouseClient()
    {
        $idProperty = $_GET['id_property'];
        // echo $idProperty;

        $houseAllInfo = $this->house->get_HouseAllInfo($idProperty); 
        $houseAllPictures = $this->pictures->get_PropertyAllPictures($idProperty);

        $vue = new View("HouseClient");
        $vue->generer(["houseAllInfo" => $houseAllInfo, "houseAllPictures" => $houseAllPictures]);
    }

    //affiche vue Description House DashBoard
    public function displayHouseDashboard()
    {
        $idProperty = $_GET['id_property'];

        $houseAllInfo = $this->house->get_HouseAllInfo($idProperty);

        $vue = new View("HouseDash");
        $vue->generer(["houseAllInfo" => $houseAllInfo]);
    }

    //affiche vue Creation de maison
    public function displayHouseCreate()
    {
        if (!isset($_SESSION["auth"]["id"])) {
            $this->displayClientHome(); 
        } else {
            $vue = new View("House_Create");
            $vue->generer(["error" => "error"]);
        }
    }

    //affiche vue Modification de maison
    public function displayHouseUpdate()
    {
        if (!isset($_SESSION["auth"]["id"])) {
            $this->displayClientHome(); 
        } else {
        $idProperty = $_GET['id_property'];

        $houseAllInfo = $this->house->get_HouseAllInfo($idProperty);

        $vue = new View("House_Update");
        $vue->generer(["houseInfo" => $houseAllInfo]);
        }
    }

    //recupere en Bdd une maison
    public function getHouse()
    {
        if (!isset($_SESSION["auth"]["id"])) {
            $this->displayClientHome(); 
        } else {
            $houseInfo = $this->house->get_House();
            return $houseInfo;
        }
    }

    //ajoute en Bdd une maison
    public function addHouse() 
    {
        if (!isset($_SESSION["auth"]["id"])) {
            $this->displayClientHome(); 
        } else {
        if (isset($_POST)) {

            // print_r($_POST);

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
            $pool = $_POST['pool'];
            $landArea = $_POST['landArea'];
            $floor = $_POST['floor'];
            $outbuilding = $_POST['outbuilding'];
            $price = $_POST['price'];

            $result = $this->house->add_House( $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, $kitchen, $parking, $exterior, $price, $pool, $landArea, $floor, $outbuilding);
            
            
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
    }

    //suprime en Bdd une maison
    public function deleteHouse()
    {
        if (!isset($_SESSION["auth"]["id"])) {
            $this->displayClientHome(); 
        } else {
            $houseId = $_GET['id_property'];

            echo $houseId;

            $result = $this->house->delete_House($houseId);
            $this->displayDashHome();
        }
    }

    //met a jour en Bdd une maison
    public function updateHouse()
    {
        if (!isset($_SESSION["auth"]["id"])) {
            $this->displayClientHome(); 
        } else {
            $houseId = $_GET['id_property'];
                
            if(isset($_POST)) {

                // var_dump($_POST);            

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
                $pool = $_POST['pool'];
                $landArea = $_POST['landArea'];
                $floor = $_POST['floor'];
                $outbuilding = $_POST['outbuilding'];
                $price = $_POST['price'];

            $this->house->update_House($houseId, $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, $kitchen, $parking, $exterior, $price, $pool, $landArea, $floor, $outbuilding);
            $result = $houseId;
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
}
