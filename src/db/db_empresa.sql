CREATE DATABASE DB_Empresa;
USE DB_Empresa;

CREATE TABLE TB_Colaborador(
    colab_cod INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    colab_nome VARCHAR(20) NOT NULL,
    colab_sobrenome VARCHAR(40) NOT NULL,
    colab_cpf VARCHAR(11) NOT NULL,
    colab_salLiq DECIMAL(7,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 DEFAULT COLLATE utf8_unicode_ci;