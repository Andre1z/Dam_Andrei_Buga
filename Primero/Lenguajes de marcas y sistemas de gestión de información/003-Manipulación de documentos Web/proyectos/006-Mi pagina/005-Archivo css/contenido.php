<?php
// PHP variables
$nombre = "Andrei Buga";
$descripcion = "Soy una persona muy joven de 18 años que quiere ser un buen programador en el futuro";
$hobbies = ["Teclear codigo", "Escuchar música", "Viajar", "Futbol"];
?>

<p>Hola, mi nombre es <strong><?php echo $nombre; ?></strong>.</p>
<p><?php echo $descripcion; ?></p>
<h2>Mis Hobbies son</h2>
<ul>
    <?php
    foreach ($hobbies as $hobby) {
        echo "<li>" . htmlspecialchars($hobby) . "</li>";
    }
    ?>
</ul>
