<?php
    class Response {
        public static function resposta($status = 200, $message = 'sucess', $data = null) {
            //AQUI VAI O CORPO DA RESPOSTA
            header('Content-Type: application/json');
            
            return json_encode([
                'status' => $status,
                'mensagem' => $message,
                'dados' => $data
            ]);
        }
    }
?>    