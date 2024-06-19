<?php
  //AQUI VAI SER NOSSA APLICAÇÃO
  require_once __DIR__ . '../../../api/config.php';
  require_once __DIR__ . '../../../api/response.php';

  $data = require_once __DIR__ . '/../../api/date.php';

  $name = []
  foreach($data as $item) {
    $nomes[] = $item['nome'];
  }

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

  echo Response::resposta(200, 'sucess', $name)