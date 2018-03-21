<?php
//1 contrôlleur frontal

//2 lancement d'une session
session_start();

// 3 recup config
require_once "config.php";

// 10 connexion à la db

require_once "m/ConnectBDMddel.php";


// 4 si nous sommes connectés
if (isset($_SESSION['mykey'])){
    require_once "c/AdminController.php";
// 5 sinon on l'appel le contrôleur public
}else {
    require_once "c/PublicControlller.php";
}