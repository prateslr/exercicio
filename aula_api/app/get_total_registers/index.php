<?php
  //AQUI VAI SER A NOSSA APLICAÇÃO
  require_once __DIR__ . '/../../api/config.php';
  require_once __DIR__ . '/../../api/response.php';

  $data = require_once __DIR__ . '/../../api/data.php';

  /*
    if(ACTIVE){
      echo Response::resposta(200, 'sucess', [
        'version' => VERSION,
        'status' => 'ativa',
      ]);
    }else{
      echo Response::resposta(200, 'sucess', [
        'version' => VERSION,
        'status' => 'manutenção',
      ]);
    }
  
    echo Response::resposta(200, 'sucess', [
      'version' => VERSION,
      'status' => 'Manutenção'
    ]);
  */

   echo Response::resposta(200,'sucess', ['total_registers' => count($date)]);