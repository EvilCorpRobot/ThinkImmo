<?php

require_once 'models/model.php';

class Picture extends Model {

    public function getFirstPictures() {
        $sql = 'SELECT id_property, MIN(path) AS first_url
                FROM image
                GROUP BY id_property';
        $firstPictures = $this->executeRequest($sql);
        return $firstPictures;
    } 
}