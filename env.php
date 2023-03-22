<?php
function getBdd() {
    return new PDO('mysql:host=localhost;dbname=thinkimmo;charset=utf8',
        'root', 'root', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}