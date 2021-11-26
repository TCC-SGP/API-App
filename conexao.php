<?php
    header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    header('Content-Type: application/json; charset=utf-8');

    //dados do banco de dados local

    $banco = 'bd_sgp';
    $host = 'localhost';
    $usuario = 'root';
    $senha = '';

    try {
        $pdo = new PDO("mysql:dbname=$banco;host=$host", "$usuario", "$senha", 
        array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    } 
    catch (Exception $e) {

        echo 'Erro ao conectar '. $e;
    }
