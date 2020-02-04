<?php

    class Plataforma{

        public $pkPlataforma;
        public $tipoPlataforma;
        public $valor;

        public function listarPlataforma(){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT pkPlataforma, tipoPlataforma FROM tb_plataforma";

            $resultado = $conexao ->query($query);
            $listaPlataforma = $resultado->fetchAll();

            return $listaPlataforma;
            
            $conexao->exec($query);
        }

    }
?>