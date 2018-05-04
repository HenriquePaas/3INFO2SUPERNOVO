<?php
class Conexao {
    const HOST      = "localhost";
    const NOMEBANCO = "3info2";
    const USUARIO   = "root";
    const SENHA     = "root";

    public static $conexao = null;
    public static function getConexao(){
        try{
            if(self::$conexao == null){
                self::$conexao = new PDO("mysql:host=".self::HOST.";dbname=".self::NOMEBANCO, self::USUARIO, self::SENHA);
                self::$conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$conexao;
        }catch(PDOException $e){
            die("Falha no Banco: " . $e->getMessage());
        }
        return $conexao;
    }
}
