<?php
/**
 * Created by PhpStorm.
 * User: JEFFERSON
 * Date: 09/11/2017
 * Time: 10:40
 */

require_once "Conexao.php";

class Produto {

    public $id;
    public $nome;
    public $preco;
    public $categoria;
    public $estoque;

    public function __construct($nome, $preco, $categoria, $estoque, $id=null){
        $this->nome = $nome;
        $this->setPreco($preco);
        $this->categoria = $categoria;
        $this->estoque = $estoque;
        $this->id = $id;
    }

    public function setPreco($preco){
        if ($preco > 0){
            $this->preco = $preco;
        }
    }

    public function estaDisponivel(){
        if ($this->estoque > 0) {
            return "Disponivel";

        } else {
            return "Indisponivel";
        }
    }
}