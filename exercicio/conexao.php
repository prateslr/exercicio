<?php
    $host = 'localhost';    
    $usuario = 'root';
    $senha = '';
    $banco = 'etecmcm';

    $conexao = new mysqli($host,$usuario,$senha,$banco);  //! Sempre nesta ordem

    if($conexao->connect_error){
        die('Falha de conexão: ' . $conexao->connect_error);
    }else { 
        echo "CONECTADO COM SUCESSO";
    }