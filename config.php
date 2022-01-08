<?php
define('DB_HOST','localhost');
define('DB_USER', 'bast');
define('DB_PASS','password');
define('DB_NAME','training_skills_api');

define('MODE','dev'); // dev ou prod

define('ROOT', 'https://jdwt4n.comp.skill17.com');


if(MODE == 'dev'):
error_reporting(E_ALL);
ini_set("display_errors", 1);
endif;



$connect = @new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($connect->connect_error) {
    echo 'Erreur de connexion à la base de données';
    exit;
}
else {
    $connect->set_charset("utf8");
}

session_start();

include('functions.php');

//myPrint_r($connect);
?>