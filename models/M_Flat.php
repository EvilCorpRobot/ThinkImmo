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

    public function add_Flat(  $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                $kitchen, $parking, $exterior, $price, $parcel, $floorNumber) {
        $sql1 = "INSERT INTO property (contract, title, address, description, type, area, charge, rooms, epd, kitchen, parking, exterior, price)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $this->executeRequest($sql1, array(  $contract, $title, $address, $description, $type, $area, $charge, $rooms, $epd, 
                                            $kitchen, $parking, $exterior, $price));
        $id = $this->getBdd()->lastInsertId();
        $sql2 = "INSERT INTO flat (id_property, parcel, floorNumber)
        VALUES (?, ?, ?);";
        $this->executeRequest($sql2, array($id, $parcel, $floorNumber));
        return $id;
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