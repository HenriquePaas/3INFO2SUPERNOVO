<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 25/04/18
 * Time: 13:40
 */

class Conexao{
    const HOST = "localhost";
    const DBNAME = "3info2";
    const USUARIO = "root";
    const SENHA = "root";

    public static  $conexao = null;

    public static function getConexao(){
        try{
            if (self:: $conexao = null){
                self:: $conexao = new PDO("mysql:host=".self::HOST."; dbname=".self::DBNAME, self::USUARIO, self::SENHA );
                self:: $conexao->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }
            return self::$conexao;
        }catch (PDOException $e){
            die("Falha na Conexão:".$e->getMessage());
        }
        return $conexao;
    }
}