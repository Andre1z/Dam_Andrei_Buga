<?php
include "../config/config.php"; // Database connection

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_FILES['image'])) {
    $image = file_get_contents($_FILES['image']['tmp_name']);
    $name = $_POST['name'];

    $sql = "INSERT INTO your_table (name, image) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sb", $name, $image);
    $stmt->send_long_data(1, $image);

    if ($stmt->execute()) {
        echo "Image uploaded successfully!";
    } else {
        echo "Error uploading image.";
    }

    $stmt->close();
}
?>

<form method="POST" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Image Name" required>
    <input type="file" name="image" required>
    <button type="submit">Upload</button>
</form>