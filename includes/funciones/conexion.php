<?php

$conn = new mysqli('histomed.com.mx', 'histomed_root', 'dh;SM&Xn_=kS', 'histomed_pw');

$conn->set_charset('utf8');

// Check connection
if ($conn->connect_errno) {
    $respuesta = array(
        'respuesta' => 'error',
        'num_error' => $conn->errno,
        'mensaje' => $conn->error_list
    );
    echo json_encode($respuesta);
}
