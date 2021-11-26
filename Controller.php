<?php
include "login.php";
$json = json_decode(file_get_contents('php://input'));
$objDB = new ClassDB();
echo json_encode($objDB->verifyLogin($json->nameUser,$json->passwordUser));