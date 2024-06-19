<?php
  //AQUI VAI SER A NOSSA APLICAÇÃO
  require_once __DIR__ . '/../../api/config.php';
  require_once __DIR__ . '/../../api/response.php';

  $data = require_once __DIR__ . '/../../api/data.php';

  //verificar se url veio de alguma identificação do cliente
  if(isset($_GET['id'])){
    $id = $_GET['id'];
  }else{
    echo Response::resposta(400,'error','Informe o id');
    exit;
  }

  if($id < 0 || $id > count($date) -1){
    echo Response::resposta(400, 'error', 'Cliente não encontrado');
    exit;
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

  echo Response::resposta(200,'sucess', $date[$id]);