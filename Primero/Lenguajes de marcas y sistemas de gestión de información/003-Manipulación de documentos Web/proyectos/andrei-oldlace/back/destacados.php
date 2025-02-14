<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);

    $conexion = mysqli_connect(
        "localhost",
        "andrei",
        "Oldlace.123",
        "proyectoapple"
    );
    $peticion = "SELECT * FROM destacados;";
    $resultado = mysqli_query($conexion, $peticion);

    $json = [];
    while($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)){
        foreach ($fila as $key => $value){
            if (is_string($value) && strlen($value) > 300){
                $fila[$key] = base64_encode($value);
            }
        }
        $json[] = $fila;
    }
    header('Content-Type: application/json');
    echo json_encode($json)
?>