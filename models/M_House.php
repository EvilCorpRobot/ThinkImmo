<?php

require_once 'models/model.php';

class House extends Model {

    public function get_House() {
        $sql = 'SELECT * FROM property INNER JOIN house ON house.id_property = property.id_property;';
        $result = $this->executeRequest($sql);
        return $result;
    }

    public function add_House(  $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                $kitchen, $parking, $exterior, $price, $pool, $landArea, $floor, $outbuilding) {
        $sql = "INSERT INTO property (contract, title, address, description, type, area, charge, rooms, epd, kitchen, parking, exterior, price)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?);

                INSERT INTO house (id_property, pool, landArea, floor, outbuilding)
                VALUES (LAST_INSERT_ID(), ?, ?, ?, ?);";
        $result = $this->executeRequest($sql, array(  $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                            $kitchen, $parking, $exterior, $price, $pool, $landArea, $floor, $outbuilding));
        
        return $result;
    }
    
    public function update_House(   $houseId, $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                    $kitchen, $parking, $exterior, $price, $pool, $landArea, $floor, $outbuilding) {
        $sql = "UPDATE property SET contract=?, title=?, address=?, description=?, type=?, area=?, charge=?, rooms=?, epd=?,
                                    kitchen=?, parking=?, exterior=?, price=?
                WHERE id_property=?;
                                    
                UPDATE house SET pool=?, landArea=?, floor=?, outbuilding=?
                WHERE id_property=?";

        $result = $this->executeRequest($sql, array($contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                                    $kitchen, $parking, $exterior, $price, $houseId, $pool, $landArea, $floor, $outbuilding, $houseId));
        
        return $result;
    }
}