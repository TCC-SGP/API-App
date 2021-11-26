<?php
include_once('conexao.php');
$query = $pdo->query('select * from tb_protetor');
$res = $query->fetchAll(PDO::FETCH_ASSOC);
for ($i = 0; $i < count($res); $i++) {
    foreach ($res[$i] as $key => $value) {
    }
    $dados[] = array(

        'id' => $res[$i]['TB_PROTETOR_ID'],
        'telefone' => $res[$i]['TB_TELEFONE_ID'],
        'cargo' => $res[$i]['TB_CARGO_ID'],
        'nome' => $res[$i]['TB_PROTETOR_NOME'],
        'sobrenome' => $res[$i]['TB_PROTETOR_SOBRENOME'],
        'rua' => $res[$i]['TB_PROTETOR_RUA'],
        'numero' => $res[$i]['TB_PROTETOR_NUMERO'],
        'bairro' => $res[$i]['TB_PROTETOR_BAIRRO'],
        'cidade' => $res[$i]['TB_PROTETOR_CIDADE'],
        'uf' => $res[$i]['TB_PROTETOR_UF'],
        'data_nasc' => $res[$i]['TB_PROTETOR_DATANASC'],
        'user' => $res[$i]['TB_PROTETOR_USUARIO'],
    );

}
if (count($res) > 0) {
    // $result = json_encode($dados);
    $result = json_encode(array('success' => true, 'result' => $dados));
} else {
    $result = json_encode(array('success' => false, 'result' => '0'));
}
echo $result;
