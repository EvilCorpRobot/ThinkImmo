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

    public function addPictures($id_property, $path) {
        $sql = "INSERT INTO image (id_property, path) VALUES (?, ?)";
        $this->executeRequest($sql, array($id_property, $path));
    }

    public function updatePictures($id_property, $path) {
        $sql = "UPDATE image SET id_property=?, path=?";
        $this->executeRequest($sql, array($id_property, $path));
    }

}