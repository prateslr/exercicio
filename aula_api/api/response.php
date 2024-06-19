<?php
class Response {
    public static function resposta($status = 200, $message = 'sucess', $data = null) {
        //AQUI VAI O CORPO DA RESPOSTA
        header('Content-Type: application/json');
        //Checar se a API está ativa ou não
        if(!ACTIVE) {
            return json_encode([
                'status' => 400,
                'mensagem' => 'Error',
                'version' => VERSION,
                'time_response' => time(),
                'date_response' => date('Y-m-d H:i:s'),
                'dados' => $data,
            ],JSON_PRETY_PRINT);
        }
            
         //Retorno da função
         return json_encode([
            'status' => $status,
            'mensagem' => $message,
            'version' => VERSION,
            'time_respose' => time(),
            'date_response' => date('d-m-Y H:i:s'),
            'dados' => $data,
        ]);
    }
}