<?php
include_once ('conexao.php');

$id = $_REQUEST['id'];
$protetor = $_REQUEST['protetor'];
$tipo_pet = $_REQUEST['tipo_pet'];
$nome = $_REQUEST['nome'];
$porte = $_REQUEST['porte'];
$raca = $_REQUEST['raca'];
$idade  = $_REQUEST['idade'];

$sql = 'update tb_pet set TB_PROTETOR_ID=:protetor, TB_TIPOPET_ID=:tipo_pet, TB_PET_NOME=:nome, TB_PET_PORTE=:porte, TB_PET_RACA=:raca, TB_PET_IDADE=:idade, updatedAt=Now() where
TB_PET_ID=:id;';

$stmt = $pdo->prepare($sql);
$stmt->bindParam(':protetor', $protetor, PDO::PARAM_STR);
$stmt->bindParam(':tipo_pet', $tipo_pet, PDO::PARAM_STR);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':porte', $porte, PDO::PARAM_STR);
$stmt->bindParam(':raca', $raca, PDO::PARAM_STR);
$stmt->bindParam(':idade', $idade, PDO::PARAM_STR);
$stmt->bindParam(':id', $id, PDO::PARAM_INT);
$stmt->execute();
?>


, , , , , , createdAt, 