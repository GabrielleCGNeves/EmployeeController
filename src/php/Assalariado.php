<?php  

    require 'Empregado.php';

    class Assalariado extends Empregado{
        var $salario;

        function __construct($nome, $sobrenome, $cpf, $salario){
            parent:: __construct($nome, $sobrenome, $cpf);
            $this -> salario = $salario;
        }

        function vencimento(){
            return($this -> salario);
        }
    }
?>