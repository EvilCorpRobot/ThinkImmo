<?php

session_start();

include('./controllers/routeur.php');

$routeur = new Routeur();
$routeur->routerRequete();