<?php
include_once ('conexao.php');
$id = $_REQUEST['id'];
$sql = 'delete from tb_pet where TB_PET_ID=:id;';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute(); 