<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $conexion = mysqli_connect(
        "localhost",
        "andrei",
        "Oldlace.123",
        "proyectoapple"
    );
    $peticion = "SELECT * FROM oferta;";
    $resultado = mysqli_query($conexion, $peticion);

    $json = [];
    while($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        $json[] = $fila;
    }
    header('Content-Type: application/json');
    echo json_encode($json)
?>