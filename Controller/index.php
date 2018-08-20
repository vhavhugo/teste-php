<?php

Class Index extends ModelProduto {

    private $produto_id;
    private $produto_nome;
    private $produto_desc;
    private $produto_quantidade;
    private $produto_preco;
    private $produto_data_cadastro;
    private $produto_data_alterada;

    public function __construct() {
        parent::__construct();
    }

    public function getProdutoId(){
        return $this->produto_id;
    }

    public function setProdutoId($id){
        $this->produto_id = $id;
    }

    public function getProdutoNome(){
        return $this->produto_nome;
    }

    public function setProdutoNome($nome){
        $this->produto_nome = $nome;
    }

    public function getProdutoDesc(){
        return $this->produto_desc;
    }

    public function setProdutoDesc($desc){
        $this->produto_desc = $desc;
    }

    public function getProdutoQuantidade(){
        return $this->produto_quantidade;
    }

    public function setProdutoQuantidade($quantidade){
        $this->produto_quantidade = $quantidade;
    }

    public function getProdutoPreco(){
        return $this->produto_preco;
    }

    public function setProdutoPreco($preco){
        $this->produto_preco = $preco;
    }

    public function getProdutoDataDeCadastro(){
        return $this->produto_data_cadastro;
    }

    public function setProdutoDataDeCadastro($produto_data_cadastro){
        $this->produto_data_cadastro = $produto_data_cadastro;
    }


    public function getProdutoDataDeAlterada(){
        return $this->produto_data_alterada;
    }

    public function setProdutoDataDeAlterada($produto_data_alterada){
        $this->produto_data_alterada = $produto_data_alterada;
    }

    public function indexAction() {
        $dados = array(
            'produtos' => $this->getAll3(),
            'produtosUltimos' => $this->getAll5()
        );
        Tpl::view("index", $dados);
    }

    public function detalhe() {
        $produto_id = intval(Router::getUri(2));
        $produto = $this->get_by_id($produto_id);
        $dados = array(
            'produto' => $produto[0]
        );
        Tpl::view("detalhe", $dados);
    }

    public function novo() {
        Tpl::view("novo");
    }

    public function editar() {
        $produto_id = intval(Router::getUri(2));
        $produto = $this->get_by_id($produto_id);
        $dados = array(
            'produto' => $produto[0]
        );
        Tpl::view("editar", $dados);
    }

    public function incluir(){
        $this->setProdutoNome($_POST["produto_nome"]);
        $this->setProdutoDesc(addslashes($_POST["produto_desc"]));
        $this->setProdutoPreco(Util::to_double($_POST["produto_preco"]));
        $this->setProdutoQuantidade(intval($_POST["produto_quantidade"]));
        $this->setProdutoDataDeCadastro($_POST["produto_data_cadastro"]);
        parent::incluir();
        Router::redirect(Router::base() . "/index/?ok");
    }

    public function atualizar() {
        $this->setProdutoId(intval($_POST["produto_id"]));
        $this->setProdutoNome($_POST["produto_nome"]);
        $this->setProdutoDesc(addslashes($_POST["produto_desc"]));
        $this->setProdutoPreco(Util::to_double($_POST["produto_preco"]));
        $this->setProdutoQuantidade(intval($_POST["produto_quantidade"]));
        $this->setProdutoDataDeCadastro($_POST["produto_data_cadastro"]);
        parent::atualizar();
        Router::redirect(Router::base() . "/index/?ok");
    }

    public function remover() {
        $produto_id = intval(Router::getUri(2));
        parent::remover($produto_id);
        Router::redirect(Router::base() . "/index/?removido");
    }

    public function max()
    {
        $produto_id = intval(Router::getUri(2));
        $quantidade = intval(Router::getUri(3));
        $soma = $quantidade + 1;
        parent::max($soma,$produto_id);
        Router::redirect(Router::base() . "/index/?ok");
    }

    public function min()
    {
        $produto_id = intval(Router::getUri(2));
        $quantidade = intval(Router::getUri(3));
        $menos = $quantidade - 1;
        parent::min($menos, $produto_id);
        Router::redirect(Router::base() . "/index/?ok");
    }
}
