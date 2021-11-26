<?php

include_once ('conexao.php');
$protetor = $_REQUEST['protetor'];
$tipo_pet = $_REQUEST['tipo_pet'];
$nome = $_REQUEST['nome'];
$porte = $_REQUEST['porte'];
$raca = $_REQUEST['raca'];
$idade  = $_REQUEST['idade'];

$sql = 'insert into tb_pet (TB_PROTETOR_ID, TB_TIPOPET_ID, TB_PET_NOME, TB_PET_PORTE, TB_PET_RACA, TB_PET_IDADE, createdAt, updatedAt) 
values (:protetor,:tipo_pet,:nome,:porte,:raca,:idade,Now(),Now());';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':protetor', $protetor, PDO::PARAM_STR);
$stmt->bindParam(':tipo_pet', $tipo_pet, PDO::PARAM_STR);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':porte', $porte, PDO::PARAM_STR);
$stmt->bindParam(':raca', $raca, PDO::PARAM_STR);
$stmt->bindParam(':idade', $idade, PDO::PARAM_STR);
$stmt->execute();
?>