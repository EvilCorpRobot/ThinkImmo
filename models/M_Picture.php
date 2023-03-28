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
    
    public function getFirstPicturesByIds($ids) {
        $sql2 = "";
        foreach ($ids as $id) {
            $sql2 .= "id_property=? OR ";
        }
        $sql2 = substr($sql2, 0, -3);
        $sql = 'SELECT id_property, MIN(path) AS first_url
                FROM image
                WHERE '. $sql2 .'
                GROUP BY id_property';

        $firstPictures = $this->executeRequest($sql, $ids);
        return $firstPictures;
    }

    public function get_PropertyAllPictures($id_property) {
        $sql = 'SELECT * FROM image WHERE id_property = ?; ';
        $result = $this->executeRequest($sql, array($id_property));
        return $result;
    }

    public function addPictures($id_property, $path) {
        $sql = "INSERT INTO image (id_property, path) VALUES (?, ?)";
        $this->executeRequest($sql, array($id_property, $path));
    }

    public function updatePictures($id_property, $path) {
        $sql = "UPDATE image SET id_property=?, path=? WHERE id_property=?";
        $this->executeRequest($sql, array($id_property, $path, $id_property));
    }

}