<?php
    include_once("../utilitarios/conexao.php");
    include_once("../modelo/produto.php");
    class ProdutoControle{
        private $produto;
        function __construct(){
            $this->produto = new Produto();
        }

        function determinarAcao($acao){
           //inserir, alterar, excluir, pegarTodos, pegarPorId, logar 
            if($acao == "inserir")
                echo $this->inserir();
            else if($acao == "alterar")
                echo $this->alterar();
            else if($acao == "excluir")
                echo $this->excluir();
            else if($acao == "pegarTodos")
                echo $this->pegarTodos();
            else if($acao == "pegarPorId")
                echo $this->pegarPorId();
            else if($acao == "logar")
                echo $this->logar();
        }

        function inserir(){
            $this->produto->nome = $_POST["nome"];
            $this->produto->descricao = $_POST["descricao"];
            $this->produto->fk_id_tipoproduto = $_POST["fk_id_tipoproduto"];

            $this->produto->inserir();

        }
        function alterar(){
            $this->produto->nome = $_POST["nome"];
            $this->produto->descricao = $_POST["descricao"];
            $this->produto->id = $_POST["id"];
            $this->produto->fk_id_tipoproduto = $_POST["fk_id_tipoproduto"];

            $this->produto->alterar();
        }
        function excluir(){
            $this->produto->id = $_POST["id"];
            $this->produto->excluir();
        }

        function pegarTodos(){
            return $this->produto->pegarTodos();
        }

        function pegarPorId(){
            $this->produto->id = $_POST["id"];
            return $this->produto->pegarPorId();
        }

        function logar(){
            $this->produto->nome = $_POST["nome"];
            $this->produto->descricao = $_POST["descricao"];
            return $this->produto->logar();
        }
    }

    $controle = new ProdutoControle();
    $controle->determinarAcao($_POST["acao"]);
?>