<?php

require_once 'models/model.php';

class Flat extends Model {
   
    public function add_Flat(  $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                $kitchen, $parking, $exterior, $price, $parcel, $floorNumber) {
        $sql = "INSERT INTO property (contract, title, address, description, type, area, charge, rooms, epd, kitchen, parking, exterior, price)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

                INSERT INTO flat (id_property, parcel, floorNumber)
                VALUES (LAST_INSERT_ID(), ?, ?);";
        $result = $this->executeRequest($sql, array(  $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                            $kitchen, $parking, $exterior, $price, $parcel, $floorNumber));

        return $result;
    }
}