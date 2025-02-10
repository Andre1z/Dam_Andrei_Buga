<?php
include "../config/config.php"; // Database connection

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $sql = "SELECT image FROM your_table WHERE id = ?"; // Replace 'your_table' with your actual table name

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $stmt->bind_result($imageData);
    $stmt->fetch();
    $stmt->close();

    if ($imageData) {
        header("Content-Type: image/jpeg"); // Change to image/png if needed
        echo $imageData;
    } else {
        echo "No image found.";
    }
}
?>
