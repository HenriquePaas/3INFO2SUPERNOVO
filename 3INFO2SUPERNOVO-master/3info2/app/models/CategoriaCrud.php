<?php

require_once "Conexao.php";

class CategoriaCrud{
    public $conexao;

    public function __construct(){
        $con = new Conexao();

        $this->conexao = $con->getConexao();
    }

    public function getCategoria(){

        $sql = 'select * from categoria';

        $result = $this->conexao->query($sql);

        $categorias = $result->fetchAll(PDO::FETCH_ASSOC);

        $objcat = [];

        foreach ($categorias as $categoria)
        {
            $objcat[] = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria']);
        }


        return $objcat;
    }

}