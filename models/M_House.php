<?php

require_once 'models/model.php';

class House extends Model {

    public function add_House(  $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                $kitchen, $parking, $exterior, $price, $pool, $landArea, $floor, $outbuilding) {
        $sql = "INSERT INTO property (contract, title, address, description, type, area, charge, rooms, epd, kitchen, parking, exterior, price)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

                INSERT INTO house (id_property, pool, landArea, floor, outbuilding)
                VALUES (LAST_INSERT_ID(), ?, ?, ?, ?);";
        $this->executeRequest($sql, array(  $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                            $kitchen, $parking, $exterior, $price, $pool, $landArea, $floor, $outbuilding));
    }
    
}