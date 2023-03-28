<?php

require_once 'models/model.php';

class Flat extends Model {
   
    public function get_FlatAllInfo($id_property) {
        $sql = 'SELECT * FROM property INNER JOIN flat ON flat.id_property = property.id_property WHERE property.id_property = ?;';
        $result = $this->executeRequest($sql, array($id_property));
        return $result;
    }

    public function get_Flat() {
        $sql = "SELECT * FROM property INNER JOIN flat ON flat.id_property = property.id_property;";
        $result = $this->executeRequest($sql);
        return $result;
    }

    public function delete_Flat($flatId) {
        $sql = 'DELETE FROM `property` WHERE id_property = ?;';

        $result = $this->executeRequest($sql, array($flatId));
    }

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

    public function update_Flat($flatId, $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                $kitchen, $parking, $exterior, $price, $parcel, $floorNumber) {
        
        $sql = "UPDATE property SET contract=?, title=?, address=?, description=?, type=?, area=?, charge=?, rooms=?, epd=?,
                                    kitchen=?, parking=?, exterior=?, price=?
                WHERE id_property=?;
                                    
                UPDATE flat SET parcel=?, floorNumber=?
                WHERE id_property=?";

        $result = $this->executeRequest($sql, array($contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                                    $kitchen, $parking, $exterior, $price, $flatId, $parcel, $floorNumber, $flatId));
        
        return $result;
    }
}