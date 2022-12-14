<?php
    class Produto{
        public $id;
        public $nome;
        public $descricao;
        public $fk_id_tipoProduto;

        public $pdo;

        function __construct(){
            $this->pdo = new Conexao();
        }

        function inserir(){
            $parametros = Array(
                ":nome" => $this->nome,
                ":descricao" => $this->descricao,

                ":fk_id_tipoproduto" => $this->fk_id_tipoproduto,

            );
            $stmt = Conexao::$conn->prepare('insert into produto (nome, descricao, fk_id_tipoproduto) 
                    values (:nome, :descricao, :fk_id_tipoproduto)');
            $stmt->execute($parametros);
        }

        function alterar(){
            $parametros = Array(
                ":nome" => $this->nome,
                ":descricao" => $this->descricao,
                ":fk_id_tipoproduto" => $this->fk_id_tipoproduto,
                ":id" => $this->id
            );
            $stmt = Conexao::$conn->prepare('
            update produto set nome = :nome, descricao = :descricao,
            fk_id_tipoproduto = :fk_id_tipoproduto where id = :id');
            $stmt->execute($parametros);
        }

        function pegarTodos(){
            $stmt = Conexao::$conn->prepare('select p.*, tp.nome as nometipo from produto p join tipoproduto tp on tp.id = p.fk_id_tipoproduto ');
            $stmt->execute();
            return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        }

        function excluir(){
            $parametros = Array(
                ":id" => $this->id
            );
            $stmt = Conexao::$conn->prepare('delete from produto where id = :id');
            $stmt->execute($parametros);
        }

        function pegarPorId(){
            $parametros = Array(
                ":id" => $this->id
            );
            $stmt = Conexao::$conn->prepare('select p.* from produto p where id = :id ');
            $stmt->execute($parametros);
            return json_encode($stmt->fetchAll(PDO::FETCH_ASSOC));
        }

        function logar(){
            $parametros = Array(
                ":nome" => $this->nome,
                ":descricao" => $this->descricao,
            );
            $stmt = Conexao::$conn->prepare('select * from produto 
            where nome = :nome and descricao = :descricao ');
            $stmt->execute($parametros);
            $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if( count($resultado) > 0){
                $_SESSION["logado"] = "1";
                $_SESSION["nome"] = $resultado[0]["nome"];
                return "1";
            }else{
                return "0";
            }
        }
    }

?>
