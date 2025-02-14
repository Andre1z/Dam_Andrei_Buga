<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    header('Content-Type: application/json');

    function pideAlgo($tabla) {
        $conexion = mysqli_connect(
            "localhost",
            "andrei",
            "Oldlace.123",
            "proyectoapple"
        );

        if (!$conexion) {
            die(json_encode(["error" => "Connection failed: " . mysqli_connect_error()]));
        }

        // Prevent SQL injection
        $tabla = mysqli_real_escape_string($conexion, $tabla);
        $peticion = "SELECT * FROM `$tabla`;"; // Use backticks for table names

        $resultado = mysqli_query($conexion, $peticion);
        if (!$resultado) {
            die(json_encode(["error" => "Query error: " . mysqli_error($conexion)]));
        }

        $json = [];
        while ($fila = mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
            foreach ($fila as $key => $value) {
                if (is_string($value) && strlen($value) > 300) {
                    $fila[$key] = base64_encode($value);
                }
            }
            $json[] = $fila;
        }

        return json_encode($json); // ✅ Fix: Return the JSON response
    }

    // ✅ Fix: Check if "tabla" is set before using it
    $tabla = isset($_GET['tabla']) ? $_GET['tabla'] : '';
    if (!$tabla) {
        die(json_encode(["error" => "Missing 'tabla' parameter"]));
    }

    echo pideAlgo($tabla);
?>
