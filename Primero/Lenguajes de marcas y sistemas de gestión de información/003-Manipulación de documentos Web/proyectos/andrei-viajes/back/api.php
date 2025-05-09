<?php
// itinerary.php
header("Content-Type: application/json");
include 'config.php'; // Ensure this path is correct

if ($conn->connect_error) {
    die(json_encode(["error" => "Connection failed: " . $conn->connect_error]));
}

if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    $sql = "SELECT * FROM intinerarios";
    $result = $conn->query($sql);

    if ($result === FALSE) {
        echo json_encode(["error" => "Error in query: " . $conn->error]);
    } else {
        $itineraries = [];
        while ($row = $result->fetch_assoc()) {
            $itineraries[] = $row;
        }
        echo json_encode($itineraries);
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    $destination = $data['destination'];
    $date = $data['date'];

    // Use prepared statements to prevent SQL injection
    $stmt = $conn->prepare("INSERT INTO intinerarios (destinacion, fecha) VALUES (?, ?)");
    $stmt->bind_param("ss", $destination, $date);

    if ($stmt->execute()) {
        echo json_encode(["mensaje" => "Nuevo intinerario creado correctamente"]);
    } else {
        echo json_encode(["error" => "Error: " . $stmt->error]);
    }

    $stmt->close();
}

$conn->close();
?>