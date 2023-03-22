<?php

require_once 'models/model.php';

class Admin extends Model {
    
    public function isConnect($email, $password) {
       $result = parent::executeRequest("SELECT id_user FROM admin WHERE email=? AND pass=?", [$email, $password]);
       if ($result != null) {
        return $result[0]["id_user"];
       } else {
        return false;
       }
    }
}