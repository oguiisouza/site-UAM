<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '18045370';
    $dbName = 'form';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    // if($conexao->connect_errno)
    // {
    //     echo "Erro";
    // }
    // else
    // {
    //     echo "Conexão efetuada com sucesso";
    // }

?>