<?php
// Include the database configuration
include "config/config.php";

// Check if the 'tabla' parameter is set
if (isset($_GET['tabla'])) {
    $tabla = $_GET['tabla'];

    // Pagination logic
    $offset = isset($_SESSION['pagina']) ? $_SESSION['pagina'] * 10 : 0;

    // Main query to fetch data from the specified table
    $peticion = "
        SELECT * 
        FROM $tabla 
        LIMIT 10  
        OFFSET $offset
    ";
    $resultado = $conexion->query($peticion);

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $identificador = "";
            echo "<tr>";
            foreach ($fila as $clave => $valor) {
                if ($clave == "Identificador") {
                    $identificador = $valor;
                }

                // Handle non-image columns
                if (!str_contains($clave, "imagen")) {
                    if (str_contains($clave, "_")) {
                        // Handle subqueries for related tables
                        $explotado = explode("_", $clave);
                        $tabla_relacionada = $explotado[0];
                        $columna_relacionada = $explotado[1];

                        $peticion2 = "
                            SELECT $columna_relacionada 
                            FROM $tabla_relacionada 
                            WHERE Identificador = $valor;
                        ";
                        $resultado2 = $conexion->query($peticion2);
                        while ($fila2 = $resultado2->fetch_assoc()) {
                            echo "<td>{$fila2[$columna_relacionada]}</td>";
                        }
                    } else {
                        // Display regular columns
                        echo "<td
                            tabla='$tabla'
                            columna='$clave'
                            identificador='$identificador'
                        >$valor</td>";
                    }
                } else {
                    // Handle image columns
                    if (empty($valor)) {
                        echo "<td><img src='./img/placeholder.jpg'></td>";
                    } else {
                        // Use display_image.php to render images
                        echo "<td><img src='inc/display_image.php?id=$identificador' width='100' height='100' style='object-fit:cover;'></td>";
                    }
                }
            }

            // Add delete button
            echo "
                <td>
                    <a href='crud/eliminar.php?tabla=$tabla&Identificador=$identificador'>
                        <button class='eliminar'>X</button>
                    </a>
                </td>
            ";
            echo "</tr>";
        }
    } else {
        echo "<tr><td colspan='10'>No records found</td></tr>";
    }
} else {
    echo "<tr><td colspan='10'>Table parameter is missing</td></tr>";
}

// Close the database connection
$conexion->close();
?>