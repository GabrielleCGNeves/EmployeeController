<?php

session_start();

require_once 'conexaoDB.php';

if (isset($_POST['btnCadastrar'])) {

    $nome = mysqli_escape_string($connection, $_POST['nome']);
    $sobrenome = mysqli_escape_string($connection, $_POST['sobrenome']);
    $cpf = mysqli_escape_string($connection, $_POST['cpf']);
    $salario = mysqli_escape_string($connection, $_POST['salario']);

    $sql = "INSERT INTO TB_Colaborador(colab_nome, colab_sobrenome, colab_cpf, colab_salLiq)VALUES('$nome','$sobrenome','$cpf','$salario')";

    if (mysqli_query($connection, $sql)) {

        header('Location: lista.php');
    }
}