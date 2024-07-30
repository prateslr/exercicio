<?php
    header ('Content-Type:application/json'); // ! Sempre esse Header "Content-Type:application/json"
    include 'conexao.php';

    $metodo = $_SERVER['REQUEST_METHOD'];

    echo json_encode($metodo);