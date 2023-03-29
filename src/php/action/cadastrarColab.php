<?php

    session_start();

    include_once '../Assalariado.php';
    include_once '../Comissionado.php';
    include_once '../Horista.php';
    require_once 'conexaoDB.php';

    if (isset($_POST['btnCadastrar'])) {

        $nome = mysqli_escape_string($connection, $_POST['nome']);
        $sobrenome = mysqli_escape_string($connection, $_POST['sobrenome']);
        $cpf = mysqli_escape_string($connection, $_POST['cpf']);
        $salario = mysqli_escape_string($connection, $_POST['salario']);
        
        $totalVenda = mysqli_escape_string($connection, $_POST['totalVenda']);
        $taxaComissao = mysqli_escape_string($connection, $_POST['taxaComissao']);
        $precoHora = mysqli_escape_string($connection, $_POST['precoHora']);
        $horasTrabalhadas = mysqli_escape_string($connection, $_POST['horasTrabalhadas']);

        $funcao = mysqli_escape_string($connection, $_POST['funcao']);

        $stmt = $connection->prepare("INSERT INTO TB_Colaborador(colab_nome, colab_sobrenome, colab_cpf, colab_salLiq) VALUES(?,?,?,?)");
        $stmt->bind_param("sssd", $sqlNome, $sqlSobrenome, $sqlCPF, $sqlSalario);

        if($funcao == 'assalariado'){
            $opcao = new Assalariado($nome, $sobrenome, $cpf, $salario);
        }

        else if($funcao == 'comissionado'){
            $opcao = new Comissionado($nome, $sobrenome, $cpf, $totalVenda, $taxaComissao);
        }

        else if($funcao == 'horista'){
            $opcao = new Horista($nome, $sobrenome, $cpf, $precoHora, $horasTrabalhadas);
        }
        
        // $sql = "INSERT INTO TB_Colaborador(colab_nome, colab_sobrenome, colab_cpf, colab_salLiq)VALUES('$opcao->nome','$opcao->sobrenome','$opcao->cpf','$opcao->vencimento()')";
        
        $sqlNome = $opcao->nome;
        $sqlSobrenome = $opcao->sobrenome;
        $sqlCPF = $opcao->cpf;
        $sqlSalario = $opcao->vencimento();

        $stmt->execute();

    }

?>

<script>

alert('Colaborador cadastrado com sucesso!');
window.location.href = "../../html/index.html";

</script>