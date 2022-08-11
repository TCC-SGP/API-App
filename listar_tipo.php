<?php

include_once('conexao.php');
$query = $pdo->query('select * from tb_tipopet');
$res = $query->fetchAll(PDO::FETCH_ASSOC);
for ($i = 0; $i < count($res); $i++) {
    foreach ($res[$i] as $key => $value) {
    }
    $dados[] = array(

        'value' => $res[$i]['TB_TIPOPET_ID'],
        'label' => $res[$i]['TB_TIPOPET_TIPO'],
    );
}
if (count($res) > 0) {
    // $result = json_encode($dados);
    $result = json_encode(array('success' => true, 'result' => $dados));
} else {
    $result = json_encode(array('success' => false, 'result' => '0'));
}
echo $result;
