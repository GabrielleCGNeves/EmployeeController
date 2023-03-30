<?php  

    require_once 'Empregado.php';

    class Assalariado extends Empregado{
        var $salario;

        function __construct($nome, $sobrenome, $cpf, $salario){
            parent:: __construct($nome, $sobrenome, $cpf);
            $this -> salario = $salario;
        }

        function vencimento(){
            if ($this -> salario > 3856.95){
                return($this -> salario - ($this -> salario * 0.14));
            }
            
            else if($this -> salario < 3856.95 && $this -> salario > 2571.30){
                return($this -> salario - ($this -> salario  * 0.12));
            }

            else if($this -> salario < 2571.30 && $this -> salario >1302.01){
                return($this -> salario - ($this -> salario * 0.09));
            }

            else{
                return($this -> salario - ($this -> salario  * 0.075));
            }
        }
    }
?>