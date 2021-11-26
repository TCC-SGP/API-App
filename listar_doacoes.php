<?php
include_once('conexao.php');
$query = $pdo->query('SELECT 
DA.TB_DOACAO_ID AS ID,
DA.TB_DOADOR_ID AS ID_DOADOR,
D.TB_TIPODOACAO_TIPO AS TIPO,
DA.TB_DOACAO_DESCRICAO AS DESCRICAO,
DA.TB_DOACAO_NOMEDOADOR AS DOADOR,
DA.TB_DOACAO_QUANTIA AS QUANTIA
FROM TB_DOACAO AS DA
INNER JOIN TB_TIPODOACAO AS D
ON DA.TB_TIPODOACAO_ID = D.TB_TIPODOACAO_ID;');
$res = $query->fetchAll(PDO::FETCH_ASSOC);
for ($i = 0; $i < count($res); $i++) {
    foreach ($res[$i] as $key => $value) {
    }
    $dados[] = array(

        'id' => $res[$i]['ID'],
        'doador' => $res[$i]['DOADOR'],
        'tipo' => $res[$i]['TIPO'],
        'descricao' => $res[$i]['DESCRICAO'],
        'quantia' => $res[$i]['QUANTIA'],
    );
}
if (count($res) > 0) {
    // $result = json_encode($dados);
    $result = json_encode(array('success' => true, 'result' => $dados));
} else {
    $result = json_encode(array('success' => false, 'result' => '0'));
}
echo $result;
