<?php

require_once 'models/model.php';

class Property extends Model {
    
    public function getProperties() {
        $sql = 'SELECT `title` FROM `property`';
        $properties = $this->executeRequest($sql);
        return $properties;
    }

    public function getPropertiesByFilter($purchase=null, $rent=null, $house=null, $flat=null, $bedroom=null, $area=null, $priceMin=null, $priceMax=null, $location=null) {
        $sql = "SELECT id_property, title FROM property WHERE ";
        $sql2 = "";
        if ($purchase) {
            $sql2 .= "contract='Achat'";
            $sql2 .= " AND ";
        }
        if ($rent) {
            $sql2 .= "contract='Location'";
            $sql2 .= " AND ";
        }
        if ($house) {
            $sql2 .= "type='Maison'";
            $sql2 .= " AND ";
        }
        if ($flat) {
            $sql2 .= "type='Appartement'";
            $sql2 .= " AND ";
        }
        if ($bedroom != null) {
            $sql2 .= "pieces=" . $bedroom;
            $sql2 .= " AND ";
        }
        if ($area != null) {
            $sql2 .= "area<=" . $area;
            $sql2 .= " AND ";
        }
        if ($priceMin != null || $priceMax != null) {
            $sql2 .= "price BETWEEN (" . $priceMin . " AND " . $priceMax . ")";
            $sql2 .= " AND ";
        }
        if ($location != null) {

        }
        $sql2 = substr($sql2, 0, -4);
        echo $sql . $sql2;
    }
}