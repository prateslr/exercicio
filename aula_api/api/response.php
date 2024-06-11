<?php
class Response {
    public static function resposta($status = 200, $message = 'sucess', $data = null) {
        //AQUI VAI O CORPO DA RESPOSTA
        header('Content-Type: application/json');

        if(!API_IS_ACTIVE) {
            return json_encode([
                'status' => 400,
                'mensagem' => 'Error',
                'version' => API_VERSION,
                'time_response' => time(),
                'data_atual' => date('Y-m-d h:i:s'),
                'dados' => null
            ]);
        }
            
         return json_encode([
            'status' => $status,
            'mensagem' => $message,
            'dados' => $data,
            'version' => API_VERSION,
            'time_response' => time(),
            'data_atual' => date('Y-m-d h:i:s'),
            'dados' => null
        ]);
    }
}