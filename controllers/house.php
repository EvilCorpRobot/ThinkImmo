<?php

require_once './models/M_House.php';
require_once './views/view.php';

class ControllerHouse extends ControllerProperty
{

    private $house;

    public function __construct()
    {
        parent::__construct();
        $this->house = new House();
    }

    //affiche vue Description House Client
    public function displayHouseClient()
    {
    }

    //affiche vue Description House DashBoard
    public function displayHouseDashboard()
    {
    }

    //affiche vue Creation de maison
    public function displayHouseCreate()
    {
        $vue = new View("House_Create");
        $vue->generer(["error" => "error"]);
    }

    //affiche vue Modification de maison
    public function displayHouseUpdate()
    {
        $houseInfo = $this->getHouse();

        $vue = new View("House_Update");
        $vue->generer(["houseInfo" => $houseInfo]);
    }

    //recupere en Bdd une maison
    public function getHouse()
    {
        $houseInfo = $this->house->get_House();
        return $houseInfo;
    }

    //ajoute en Bdd une maison
    public function addHouse()
    {

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

            $result = $this->house->add_House( $contract, $title, $address, $description, $type, $area, $charge, $rooms,
                                                 $epd, $kitchen, $parking, $exterior, $price, $pool, $landArea, $floor, $outbuilding);

            $this->displayDashHome();
        }
    }

    //suprime en Bdd une maison
    public function deleteHouse()
    {

    }

    //met a jour en Bdd une maison
    public function updateHouse()
    {
        $houseId = 1;
            
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

            $result = $this->house->update_House($houseId, $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                $kitchen, $parking, $exterior, $price, $pool, $landArea, $floor, $outbuilding);
        }
        $this->displayDashHome();
    }
}
