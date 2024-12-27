<section id="sobre">
    <?php
    // PHP variables
    $nombre = "Andrei Buga";
    $descripcion = "Soy una persona muy joven, tengo 18 años y estoy lleno de sueños, metas y ambiciones. Uno de los objetivos más importantes que he decidido perseguir es convertirme en un excelente programador en el futuro. No solo quiero aprender a escribir código, sino que quiero dominar el arte de resolver problemas, de crear soluciones innovadoras y de contribuir con mis habilidades al desarrollo de proyectos que tengan un impacto positivo en el mundo.

Sé que este camino no será fácil, pero estoy dispuesto a esforzarme y a aprender de cada reto que encuentre en el proceso. Cada error será una lección, cada línea de código una oportunidad para crecer, y cada proyecto una nueva manera de probarme a mí mismo. Estoy comprometido a estudiar constantemente, explorar nuevos lenguajes y herramientas, colaborar con otros, y nunca dejar de ser curioso por cómo funciona la tecnología que nos rodea.";
    $skills = ["HTML", "CSS", "JavaScript", "PHP", "SQL"];
    $email_contacto = "bugaandrei1@gmail.com";
    ?>
    <h2>Sobre mí</h2>
    <p>Hola, mi nombre es <strong><?php echo $nombre; ?></strong>.</p>
    <p><?php echo $descripcion; ?></p>

    <h3>Skills</h3>
    <ul>
        <?php foreach ($skills as $skill): ?>
            <li><?php echo htmlspecialchars($skill); ?></li>
        <?php endforeach; ?>
    </ul>

    <h3>Contacto</h3>
    <p>Contactame via email a: <a href="mailto:<?php echo $email_contacto; ?>"><?php echo $email_contacto; ?></a></p>
</section>