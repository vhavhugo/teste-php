<?php
/**
 * Created by PhpStorm.
 * User: hugo
 * Date: 17/08/18
 * Time: 19:04
 */

class Produtos extends ModelProduto
{

    public function indexAction() {
        $dados = array(
            'produtos' => $this->getAll()
        );
        Tpl::view("produtos", $dados);
    }

}