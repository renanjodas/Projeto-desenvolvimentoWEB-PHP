<?php

    class Contato{

        public $pkContato;
        public $nome;
        public $telefone;
        public $email;
        public $mensagem;

        public function enviarMensagem($nome, $telefone, $email, $mensagem){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "INSERT INTO tb_contato(nome, telefone, email, mensagem) VALUES ('".$nome."','".$telefone."','".$email."','".$mensagem."')";

            $conexao ->exec($query);
        }

        public function listarMensagens(){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT * FROM tb_contato";

            $resultado = $conexao ->query($query);
            $lista = $resultado ->fetchAll();
            return $lista;

            $conexao ->exec($query);
        }

        public function atualizarMensagem(){
            
        }
    }

?>