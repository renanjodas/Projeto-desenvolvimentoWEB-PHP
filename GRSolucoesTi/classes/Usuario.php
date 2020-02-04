<?php

    class Usuario{

        public $pkUsuario;
        public $usuario;
        public $senha;

        public function listarUsuarios(){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT pkUsuario, usuario FROM tb_usuarios";
            $resultado = $conexao ->query($query);
            $lista = $resultado ->fetchAll();
            return $lista;
        }

        public function inserir($loginUsuario,$senha){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "INSERT INTO tb_usuarios(usuario, senha) VALUES ('".$loginUsuario."','".$senha."')";

            $conexao ->exec($query);
        }

        public function listar1Usuario($pkUsuario){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT pkUsuario, usuario, senha FROM tb_usuarios WHERE pkUsuario = ".$pkUsuario;

            $resultado = $conexao ->query($query);
            $lista = $resultado ->fetchAll();
            
            foreach($lista as $linha){
                return $linha;
            }

            $conexao ->exec($query);
        }

        public function alterarUsuario($usuario, $senha, $pkUsuario){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "UPDATE tb_usuarios SET usuario = '".$usuario."', senha = '".$senha."' WHERE pkUsuario = " .$pkUsuario;

            $conexao->exec($query);
        }

        public function excluirUsuario($pkUsuario){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "DELETE FROM tb_usuarios WHERE pkUsuario = " . $pkUsuario;

            $conexao->exec($query);

        }

    }
?>