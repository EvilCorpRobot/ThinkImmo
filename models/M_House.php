<?php

require_once 'models/model.php';

class House extends Model {
   
    public function add_House(  $contract, $title, $address, $description, $area, $charge, $rooms, $epd, 
                                $kitchen, $parking, $exterior, $pool, $landArea, $floor, $outbuilding, $price) {
        $sql = "INSERT INTO property (contract, title, address, description, area, charge, rooms, epd, kitchen, parking, exterior, price)
                VALUES ('$contract', '$title', '$address', '$description', '$area', '$charge', '$rooms', '$epd', '$kitchen', '$parking', '$exterior', '$price');

                INSERT INTO house (id_property, pool, landArea, floor, outbuilding)
                VALUES (LAST_INSERT_ID(), '$pool', '$landArea', '$floor', '$outbuilding');";
        $this->executeRequest($sql);
    }

}