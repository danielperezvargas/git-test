<?php

$nombreSuscriptor = $_POST['nombreSuscriptor'];
$emailSuscriptor = $_POST['emailSuscriptor'];
$accion = $_POST['accion'];
$id_registro = $_POST['id_registro'];

// echo json_encode($_POST);

if ($accion == 'insert') {


    // Importar la conexion 
    include '../funciones/conexion.php';

    try {
        //Realizar la consulta a la base de datos
        $query = "INSERT INTO suscriptores (nombre, email) VALUES (?, ?) ";
        $stmt = $conn->prepare($query);
        $stmt->bind_param('ss', $nombreSuscriptor, $emailSuscriptor);
        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $respuesta = array(
                'respuesta' => 'ok',
                'id_insertado' => $stmt->insert_id,
                'accion' => $accion,
                'nombreSuscriptor' => $nombreSuscriptor,
                'emailSuscriptor' => $emailSuscriptor,
                'mensaje' => ''
            );
        } else {
            $respuesta = array(
                'respuesta' => 'error',
                'num_error' => $conn->errno,
                'mensaje' => $conn->error_list

            );
        }

        $stmt->close();
        $conn->close();
    } catch (\Throwable $th) {
        //throw $th;
        $respuesta = array(
            'error-try' => $th->getMessage()
        );
    }

    echo json_encode($respuesta);
}


if ($accion == 'update') {
}



if ($accion == 'delete') {
}
