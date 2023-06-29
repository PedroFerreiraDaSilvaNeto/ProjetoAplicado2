<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'projeto_aplicado2';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    if($conexao->connect_errno)
    {
        echo "Erro!";
    }
    else
    {
        echo "Conecxão efetuada com sucesso!";
    }

?>