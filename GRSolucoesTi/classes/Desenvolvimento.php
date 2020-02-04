<?php

    class Desenvolvimento{

        public $pkDesenvolvimento;
        public $tipoDesenvolvimento;
        public $valor;

        public function listarDesenvolvimento(){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT pkDesenvolvimento, tipoDesenvolvimento FROM tb_desenvolvimento";

            $resultado = $conexao ->query($query);
            $listaDesenvolvimento = $resultado->fetchAll();

            return $listaDesenvolvimento;
            
            $conexao->exec($query);
        }

    }
?>