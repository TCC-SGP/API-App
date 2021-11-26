<?php

include_once ('conexao.php');

$doador = $_REQUEST['TB_DOADOR_ID'];
$tipo_doador = $_REQUEST['tipo_doador'];
$doacao = $_REQUEST['TB_TIPODOACAO_ID'];
$descricao = $_REQUEST['TB_DOACAO_DESCRICAO'];
$nomedoador = $_REQUEST['TB_DOACAO_NOMEDOADOR'];
$quantia = $_REQUEST['TB_DOACAO_QUANTIA'];

$sql = 'insert into tb_pet (TB_DOADOR_ID, TB_TIPODOACAO_ID, TB_DOACAO_DESCRICAO, TB_DOACAO_NOMEDOADOR, TB_DOACAO_QUANTIA) 
values (:doador,:tipo_doador,:doacao,:descricao,:nomedoador,:quantia,Now(),Now());';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':doador', $protetor, PDO::PARAM_STR);
$stmt->bindParam(':tipo_doaodr', $tipo_pet, PDO::PARAM_STR);
$stmt->bindParam(':doacao', $nome, PDO::PARAM_STR);
$stmt->bindParam(':descricao', $porte, PDO::PARAM_STR);
$stmt->bindParam(':nomedoador', $raca, PDO::PARAM_STR);
$stmt->bindParam(':quantia', $idade, PDO::PARAM_STR);
$stmt->execute();
?>