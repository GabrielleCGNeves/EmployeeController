<?php
    require_once 'Empregado.php';

    class Comissionado extends Empregado{
        var $totalVenda;
        var $taxaComissao;

        function __construct($nome, $sobrenome, $cpf, $totalVenda, $taxaComissao){
            parent:: __construct($nome, $sobrenome, $cpf);
            $this -> totalVenda = $totalVenda;
            $this -> taxaComissao = $taxaComissao;
        }

        function vencimento(){
            return ($this -> totalVenda * ($this -> taxaComissao / 100));
        }
    }
?>