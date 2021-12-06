<?php

include_once ('conexao.php');

$descricao = $_REQUEST['descricao'];
$nomedoador = $_REQUEST['nomedoador'];
$quantia = $_REQUEST['quantia'];

$sql = 'insert into tb_doacao (TB_TIPODOACAO_ID, TB_DOACAO_DESCRICAO, TB_DOACAO_NOMEDOADOR, TB_DOACAO_QUANTIA, TB_DOACAO_ESTADO, createdAt, updatedAt)
values (2,:descricao,:nomedoador,:quantia,"pago",Now(),Now());';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':descricao', $descricao, PDO::PARAM_STR);
$stmt->bindParam(':nomedoador', $nomedoador, PDO::PARAM_STR);
$stmt->bindParam(':quantia', $quantia, PDO::PARAM_STR);
$stmt->execute();
?>