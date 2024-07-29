<?php
    $host = 'localhost';
    $user = 'root';
    $senha = '';
    $banco = 'etecmcm';

    $conection = new mysqli ($host, $user, $senha, $banco); // Sempre nessa mesma Ordem!!!

    if($conection->connect_error) {
        die('Falha na conexão: ' . $conection->conennect_error);
    } else {
        echo 'Conectado com Sucesso! :)'; 
    }