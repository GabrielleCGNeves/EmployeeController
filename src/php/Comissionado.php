<?php
    require 'Empregado.php';

    class Comissionado extends Empregado{
        var $totalVenda;
        var $taxaComissao;

        function __construct($nome, $sobrenome, $cpf, $totalVenda, $taxaComissao){
            parent:: __construct($nome, $sobrenome, $cpf);
            $this -> totalVenda = $totalVenda;
            $this -> taxaComissao = $taxaComissao;
        }
    }
?>