<?php

header('Access-Control-Allow-Origin: *');
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Methods: POST, GET, OPTIONS');
    header('Access-Control-Allow-Headers: Content-Type, Authorization, X-Requested-With');
    header('Content-Type: application/json; charset=utf-8');

class ClassDB
{
    
    #Conexão ao banco
    private function conectDB()
    {
        try{
            return $con = new \PDO("mysql:host=localhost;dbname=bd_sgp","root","");
        }catch (PDOException $erro){
            return $erro->getMessage();
        }
    }


    #Verificar o login
    public function verifyLogin($user,$pass)
    {
        $sql = 'select * from tb_protetor where TB_PROTETOR_USUARIO=? and TB_PROTETOR_SENHA=?';
        $stmt = $this->conectDB()->prepare($sql);
        $stmt->bindParam(1,$user,\PDO::PARAM_STR);
        $stmt->bindParam(2,$pass,\PDO::PARAM_STR);
        $stmt->execute();
        return($stmt->rowCount() > 0)?true:false;
    }
}
