<div id="contacto" class="contenedor">
    <h2>Contactame</h2>
    <form action="proceso_contacto.php" method="post">
        <label for="name">Nombre:</label>
        <input type="text" name="nombre" id="nombre" required>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <label for="message">Mensaje:</label>
        <textarea name="mensaje" id="mensaje" rows="5" required></textarea>
        <button type="enviar">Enviar</button>
    </form>
</div>