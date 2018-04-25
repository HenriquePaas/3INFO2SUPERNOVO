<?php
/**
 * Created by PhpStorm.
 * User: aluno
 * Date: 25/04/18
 * Time: 13:33
 */
class CategoriaCrud{
    public function getCategoria(){

        $this->conexao = Conexao::getConexao();

        $sql = 'select * from categoria';

        $result = $this->conexao->query($sql);

        $categoria = $result->fetch(PDO::FETCH_ASSOC);

        $objcat = new Categoria($categoria['id_categoria'], $categoria['nome_categoria'], $categoria['descricao_categoria']);

        return $objcat;
    }

}