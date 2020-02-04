<?php

    class Servicos{

        public $id;
        public $tipo;
        public $valor;

        public function listarServicos(){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT id, tipo FROM tb_tiposervico";
            $resultado = $conexao ->query($query);
            $lista = $resultado ->fetchAll();
            return $listaServicos;

            $conexao->exec($query);
        }

        public function listar1Servicos(){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT id, tipo FROM tb_tiposervico";

            $resultado = $conexao ->query($query);
            $lista = $resultado->fetchAll();

            foreach($lista as $linha){
                return $lista;
            }

            $conexao->exec($query);
        }

    }
?>