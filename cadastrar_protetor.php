<?php

include_once('conexao.php');
$telefone = $_REQUEST['telefone'];
$cargo = $_REQUEST['cargo'];
$nome = $_REQUEST['nome'];
$sobrenome = $_REQUEST['sobrenome'];
$rua = $_REQUEST['rua'];
$numero = $_REQUEST['numero'];
$bairro = $_REQUEST['bairro'];
$cidade = $_REQUEST['cidade'];
$uf = $_REQUEST['uf'];
$data_nasc = $_REQUEST['data_nasc'];
$user = $_REQUEST['user'];
$senha = $_REQUEST['senha'];

$sql = 'insert into tb_protetor(TB_TELEFONE_ID, TB_CARGO_ID, TB_PROTETOR_NOME, TB_PROTETOR_SOBRENOME, TB_PROTETOR_RUA, TB_PROTETOR_NUMERO, TB_PROTETOR_BAIRRO, TB_PROTETOR_CIDADE, TB_PROTETOR_UF, TB_PROTETOR_DATANASC, TB_PROTETOR_USUARIO, TB_PROTETOR_SENHA, createdAt, updatedAt) 
values (:telefone,:cargo,:nome,:sobrenome,:rua,:numero,:bairro,:cidade,:uf,:data_nasc,:user,:senha,Now(),Now());';
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':telefone', $telefone, PDO::PARAM_STR);
$stmt->bindParam(':cargo', $cargo, PDO::PARAM_STR);
$stmt->bindParam(':nome', $nome, PDO::PARAM_STR);
$stmt->bindParam(':sobrenome', $sobrenome, PDO::PARAM_STR);
$stmt->bindParam(':rua', $rua, PDO::PARAM_STR);
$stmt->bindParam(':numero', $numero, PDO::PARAM_STR);
$stmt->bindParam(':bairro', $bairro, PDO::PARAM_STR);
$stmt->bindParam(':cidade', $cidade, PDO::PARAM_STR);
$stmt->bindParam(':uf', $uf, PDO::PARAM_STR);
$stmt->bindParam(':data_nasc', $data_nasc, PDO::PARAM_STR);
$stmt->bindParam(':user', $user, PDO::PARAM_STR);
$stmt->bindParam(':senha', $senha, PDO::PARAM_STR);
$stmt->execute();
?>