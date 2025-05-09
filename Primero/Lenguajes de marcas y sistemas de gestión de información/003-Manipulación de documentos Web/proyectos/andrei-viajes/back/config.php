<?php
// Database connection
$servername = "localhost";
$username = "viajes";
$password = "LosViajes.1234";
$dbname = "planificador_viajes";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Example function to add a user
function addUser($name, $email, $preferences) {
    global $conn;
    $sql = "INSERT INTO usuarios (nombre, email, preferencias) VALUES ('$name', '$email', '$preferences')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Call the function
addUser("John Doe", "john@example.com", "Beach vacations");

$conn->close();
?>
