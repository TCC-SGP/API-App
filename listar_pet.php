<?php

include_once('conexao.php');
$query = $pdo->query('select * from tb_pet');
$res = $query->fetchAll(PDO::FETCH_ASSOC);
for ($i = 0; $i < count($res); $i++) {
    foreach ($res[$i] as $key => $value) {
    }
    $dados[] = array(

        'id' => $res[$i]['TB_PET_ID'],
        'protetor' => $res[$i]['TB_PROTETOR_ID'],
        'tipo' => $res[$i]['TB_TIPOPET_ID'],
        'nome' => $res[$i]['TB_PET_NOME'],
        'porte' => $res[$i]['TB_PET_PORTE'],
        'raca' => $res[$i]['TB_PET_RACA'],
        'idade' => $res[$i]['TB_PET_IDADE'],
    );
}
if (count($res) > 0) {
    // $result = json_encode($dados);
    $result = json_encode(array('success' => true, 'result' => $dados));
} else {
    $result = json_encode(array('success' => false, 'result' => '0'));
}
echo $result;
