<?php

require_once 'models/model.php';

class Property extends Model {
    
    public function getProperties() {
        $sql = 'SELECT `id_property`, `title`, `type` FROM `property`';
        $properties = $this->executeRequest($sql);
        return $properties;
    }
}