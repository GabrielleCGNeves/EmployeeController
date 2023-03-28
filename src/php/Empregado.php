<?php
    abstract class Empregado{
        var $nome;
        var $sobrenome;
        var $cpf;

        abstract function vencimento();

        function __construct($nome, $sobrenome, $cpf){
            $this -> nome = $nome;
            $this -> sobrenome = $sobrenome;
            $this -> cpf = $cpf;
        }

        function __destruct(){
            echo "Objeto {$this -> nome} finalizado...";
        }
    }
?>