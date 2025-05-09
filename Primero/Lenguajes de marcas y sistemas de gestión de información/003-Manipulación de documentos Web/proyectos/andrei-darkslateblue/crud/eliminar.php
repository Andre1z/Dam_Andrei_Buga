<?php
include "../utilidades/error.php";
include "../config/config.php";

// Check if all required parameters are set
if (isset($_GET['tabla'], $_GET['Identificador'])) {
    $tabla = $_GET['tabla'];
    $identificador = $_GET['Identificador'];

    // Prepare the SQL statement
    $stmt = $conexion->prepare("DELETE FROM $tabla WHERE Identificador = ?");
    if ($stmt) {
        // Bind the identifier parameter and execute the statement
        $stmt->bind_param("i", $identificador); // Assuming Identificador is an integer
        $resultado = $stmt->execute();

        if ($resultado) {
            echo "Deletion successful";
        } else {
            echo "Error deleting record: " . $stmt->error;
        }

        // Close the statement
        $stmt->close();
    } else {
        echo "Error preparing statement: " . $conexion->error;
    }
} else {
    echo "Missing parameters";
}
?>
<meta http-equiv="refresh" content="1; url=../escritorio.php">
