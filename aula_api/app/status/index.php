<?php
    //AQUI VAI SER NOSSA APLICAÇÃO
    require_once __DIR__ . '../../../api/config.php';
    require_once __DIR__ . '../../../api/response.php';

    if(active) {
        echo Response::resposta(200, 'sucess', [
            'version' => version,
            'status' => 'Ativa'
        ]);
    } else{
        echo Response::resposta(200, 'sucess', [
            'version' => version,
            'status' => 'Manutenção'
        ]);
    }
?>