<?php

    class Orcamentos{

        public $pkOrcamento;
        public $nome;
        public $telefone;
        public $email;
        public $fkTipoServico;
        public $fkPlataforma;
        public $fkDesenvolvimento;
        public $pessoa;
        public $info_complementar;
        public $senha;
        public $fkStatus;

        public function listarOrcamentos(){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT a.pkOrcamento, a.nome, a.telefone, a.email, b.tipoServico, c.tipoPlataforma, d.tipoDesenvolvimento, a.pessoa, a.info_complementar, e.tipoStatus FROM tb_orcamentos a
            INNER JOIN tb_tipoServico b ON a.fkTipoServico = b.pkServico
            INNER JOIN tb_plataforma c ON a.fkplataforma = c.pkplataforma
            INNER JOIN tb_desenvolvimento d ON a.fkDesenvolvimento = d.pkDesenvolvimento
            INNER JOIN tb_status e ON a.fkStatus = e.pkStatus;";
            $resultado = $conexao ->query($query);
            $lista = $resultado ->fetchAll();
            return $lista;

            $conexao ->exec($query);
        }

        public function inserir($nome, $telefone, $email, $fkTipoServico, $fkPlataforma, $fkDesenvolvimento, $pessoa, $info_complementar, $senha){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "INSERT INTO tb_orcamentos (nome, telefone, email, fkTipoServico, fkPlataforma, fkDesenvolvimento, pessoa, info_complementar, senha) VALUES ('".$nome."','".$telefone."','".$email."','".$fkTipoServico."','".$fkPlataforma."','".$fkDesenvolvimento."','".$pessoa."','".$info_complementar."','".$senha."')";

            $conexao ->exec($query);
        }

        public function listarOrcamentoCli($consultaEmail, $consultarSenha){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT nome, email, info_complementar, fkStatus FROM tb_orcamentos WHERE email = '".$consultaEmail."'";
            $resultado = $conexao ->query($query);
            $lista = $resultado ->fetchAll();
            return $lista;

            $conexao ->exec($query);
        }

        public function listar1Orcamento(){
            $conexao = new PDO("mysql:host=127.0.0.1; dbname=gr_solucoes","root","");

            $query = "SELECT a.pkOrcamento, a.nome, a.telefone, a.email, b.tipoServico, c.tipoPlataforma, d.tipoDesenvolvimento, a.pessoa, a.info_complementar, e.tipoStatus FROM tb_orcamentos a
            INNER JOIN tb_tipoServico b ON a.fkTipoServico = b.pkServico
            INNER JOIN tb_plataforma c ON a.fkplataforma = c.pkplataforma
            INNER JOIN tb_desenvolvimento d ON a.fkDesenvolvimento = d.pkDesenvolvimento
            INNER JOIN tb_status e ON a.fkStatus = e.pkStatus;";
            $resultado = $conexao ->query($query);
            $lista = $resultado ->fetchAll();

            foreach($lista as $linha){
                return $linha;
            }

            $conexao ->exec($query);

        }
    }
?>