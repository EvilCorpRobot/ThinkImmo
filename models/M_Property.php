<?php

require_once 'models/model.php';

class Property extends Model {
    
    public function getProperties() {
        $sql = 'SELECT `title` FROM `property`';
        $properties = $this->executeRequest($sql);
        return $properties;
    }
}