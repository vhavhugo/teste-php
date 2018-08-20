<?php

class ModelProduto
{

    public function __construct() {
        $this->db = new DB();
    }

    public function getAll($c = '*') {
            $sql = "SELECT $c FROM produtos "
                . " GROUP BY produto_id ORDER BY produto_nome, produto_preco DESC ";
            $dados = $this->db->fetchAll($sql);
            return $dados;
    }

    public function getAll3($c = '*') {
        $sql = "SELECT $c FROM produtos "
            . " WHERE produto_quantidade < 4 "
            . " GROUP BY produto_id ORDER BY produto_id DESC ";
        $dados = $this->db->fetchAll($sql);
        return $dados;
    }

    public function getAll5($c = '*') {
        $sql = "SELECT $c FROM produtos "
            . " GROUP BY produto_id ORDER BY produto_data_alterada DESC LIMIT 0,5";
        $dados = $this->db->fetchAll($sql);
        return $dados;
    }

    public function get_by_id($produto_id) {
        $sql = "SELECT * FROM produtos "
            . " WHERE produto_id = $produto_id";
        $dados = $this->db->fetchAll($sql);
        return $dados;
    }

    public function incluir(){

        $nome = $this->getProdutoNome();
        $desc = $this->getProdutoDesc();
        $preco = $this->getProdutoPreco();
        $quantidade = $this->getProdutoQuantidade();
        $data = $this->getProdutoDataDeCadastro();

        $inserir = "INSERT INTO produtos (produto_nome,produto_desc,produto_preco,produto_quantidade, produto_data_cadastro) VALUES ( '$nome','$desc','$preco','$quantidade', '$data' );";
        $this->db->query($inserir);
    }

    public function atualizar(){
        $nome = $this->getProdutoNome();
        $desc = $this->getProdutoDesc();
        $preco = $this->getProdutoPreco();
        $quantidade = $this->getProdutoQuantidade();
        $data = $this->getProdutoDataDeCadastro();
        $id = $this->getProdutoId();

        $inserir = "UPDATE produtos SET ";
        $inserir .= "produto_nome = '$nome', produto_desc = '$desc', produto_preco = '$preco', produto_quantidade = '$quantidade', produto_data_cadastro = '$data' ";
        $inserir .= "WHERE produto_id = $id; ";
        $retorno = array();
        $this->db->query($inserir);
    }

    public function remover($id){
        $sql = "DELETE FROM produtos WHERE produto_id = $id";
        $this->db->query($sql);
    }

    public function max($somar,$id){
        $sql = "UPDATE produtos SET produto_quantidade = $somar WHERE produto_id = $id;";
        $this->db->query($sql);
    }

    public function min($menor, $id){
        $sql = "UPDATE produtos SET produto_quantidade = $menor WHERE produto_id = $id;";
        $this->db->query($sql);
    }
}