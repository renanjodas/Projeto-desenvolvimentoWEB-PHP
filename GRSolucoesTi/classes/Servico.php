<?php

    class Servico{

        public $pkServico;
        public $tipoServico;
        public $valor;


        public function listarServicos(){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT pkServico, tipoServico FROM tb_tipoServico";

            $resultado = $conexao ->query($query);
            $listaServicos = $resultado->fetchAll();

            return $listaServicos;
            
            $conexao->exec($query);
        }

            /*public function listarServicos(){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT pkServico, tipo FROM tb_tiposervico";
            $resultado = $conexao ->query($query);
            $lista = $resultado ->fetchAll();
            return $listaServicos;

            $conexao->exec($query);
        }
        */

    }
?>