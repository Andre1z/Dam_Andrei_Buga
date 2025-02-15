<main>
    <div class="contenedor">
        <section>
            <article id="post">
                <h2>1.- Aplicación Oldlace</h2>
                <p>En esta aplicación vienen recogidas varias aplicaciones que esta disponible su información, en cambio tambien hay productos de tecnologia, estos productos estan disponibles para comprar y tambien se puede ver su descripción.</p>
                <p>Esta pagina se empezó como un simple HTML, con su CSS y JS. A pasar a estar creada con PHP, las informaciones se sacan mediante una petición SQL de una base de datos. Creada Modularmente, con subpáginas, para cada categoría. En algunas subpáginas de Información de un producto o bien de una aplicación hay un botón de (Dark/Light mode) la funcionalidad del botón fue creada mediante JS para que detectase cuando se pulsa el botón se cambie el fondo de la pagina a negro/blanco, también esta función tiene otra característica, cuando se cambia de modo el color de los textos también se cambian de color según (Dark/light) esto se realizo mediante unas variables de css. En la subpágina hay varios productos para comprar, estos productos si le das clic aparecen dos botones ("Seguir comprando" o "Procesar el pedido") estos dos botones emergentes se crearon en HTML, estilizados en css y todas las funciones se crearon en JS, en JavaScript se realizo que cuando se pulse uno de los botones haga una cosa: Si se pulsa el botón de ("Seguir comprando")los dos botones emergentes desaparecen pero JS a guardado esa información en el LocalStorage con el nombre del producto. En cambio si pulsamos el otro botón de("Procesar el pedido") nos enviara a otra pagina para realizar el pago de ese pedido. En la pagina principal tenemos dos carruseles que fuero creados HTML, estilizados y las funciones en CSS, los carruseles están animados mediante una etiqueta llamada "@keyframe" que hace que cuando pase un tiempo determinado se mueva. En la parte superior de nuestra pagina principal tenemos una oferta que también fue animada con css, en este caso que no se mueva sino que cambie de color unos cuantas veces cada poco tiempo, y cuando termine se quede estática.</p>
                <img src="img/oldlace_captura.jpg">
                <img src="img/oldlace_tienda.jpg">
                <img src="img/oldlace_carrito.jpg">
                <img src="img/oldlace_info.jpg">
                <img src="img/oldlace_infodark.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>2.- Aplicación DarkSlateBlue</h2>
                <p>Esta aplicacion sirve para ver actualizar y eliminar registros de la base de datos, primero tienes que entrar con correo y contraseña, despues en la parte izquierda apareceran las tablas de la base de datos, clicas en una, entonces apareceran esos registros de esa misma tabla seleccionada.</p>
                <p>Esta aplicacion fue creada con PHP, JavaScript y CSS para que un administrados pueda gestionar una base de datos cualquiera con este software, en los comandos JS se lanza una peticion fetch a la base de datos, que PHP luego hace una peticion SQL contra la base de datos mediante JavaScript, entonces cuando la base de datos responde lo hace tambien mediante JS para que luego PHP la incrustre en pantalla. DarkSlateBlue esta creado como si fuese un panel de control de WordPress con el estilo similar a WordPress, solo que con unos pequeños retoques, por ejemplo los colores son diferentes al de WP. Cuando un administrador quiera añadir un registro lo puede hacer, porque hay un boton a la parte inferior derecha (+) que esta programado mediante JS, que cuando se pulse el boton, lo detecte y sobresale un menu con los campos a rellenar para añadir el nuevo registro, los campos y todo tambien esta hecho en JS, que detecte la tabla en la que este, que detecte el nombre de los campos a poner. Cuando el administrador termina de poner los datos, pulsa un boton de "añadir", ese boton manda un "INSERT" en la BD donde se aplica todo lo que puso el administrador en el menu. Para actualizar un registro el administrador debe hacer doble clic en el registro que quiere cambiar, esto hace que JS detecte ese doble clic con el raton y puedes editar el registro, cuando haya terminado con simplemente dar un clic fuera del cuadrado de edición entonces JS cierra la posibilidad de editar ese campo y autamaticamente manda el resultado cambiado a la base de datos . Para eliminar un registro se debe ir a la parte derecha de los registros donde hay un boton (X) que hace un "DELETE FROM 'tabla Y' WHERE 'indetificador = X'", JS manda este comando contra la BD y entonces la BD devuelve la peticion hecha borando el registro seleccionado.</p>
                <img src="img/darkslateblue.jpg">
                <img src="img/oldlace_tienda.jpg">
                <img src="img/oldlace_carrito.jpg">
                <img src="img/oldlace_info.jpg">
                <img src="img/oldlace_infodark.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>3.- Aplicación Chocolate</h2>
                <p>Esta aplicacion sirve para documentar carpetas con un monton de proyectos dentro, seleccionando la carpeta de origen que queremos documentar y tambien seleccionamos la ruta donde queremos que se nos exporte toda la carpeta documentada. Muy practico para proyectos muy extensos donde hay muchas subcarpetas dentro con muchos archivos</p>
                <p>Esta aplicación fue creada con Python, mediante las librerías de: OS, tkinter. La librería OS nos ayuda cuando nosotros queremos seleccionar una carpeta de nuestro sistema para documentar o bien para hacer la exportación en formato MarkDown (.MD). La aplicación para que se ejecute una ventana hemos usado la librería tkinter para crear interfaces de usuario muy facilmente que usando otros lengurajes de programación como C++. Los botones fueron creados con tkinter que tienen la siguiente función: "Seleccionar Carpeta" mediante la otra librería OS, muestra todas las carpetas de nuestro sistema operativo correctamente, entonces cuando tengamos seleccionada una carpeta esta el otro botón "Seleccionar archivo" que también mediante la librería OS nos permite seleccionar o crear un archivo con la extensión .md (MarkDown), luego tenemos el ultimo botón "Iniciar Proceso", Python reconoce todo lo seleccionado en los anteriores apartados y se pone a hacer un archivo MarkDown de la carpeta seleccionada, con todas sus subcarpetas y archivos.</p>
                <img src="img/chocolate.jpg">
                <img src="img/chocolate2.jpg">
                <img src="img/chocolate3.jpg">
                <img src="img/chocolate4.jpg">
                <img src="img/chocolate5.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>4.- Aplicación Tomato</h2>
                <p>Esta aplicacion sirve para medir los parametros de nuestro componentes es decir, cuanto % estamos gastando de CPU, a cuanto espacio de uso esta el disco duro. Tomato es ideal para hacer un perfecto monitorizaje de nuestro componentes y entender porque nuestra maquina esta funcionando lento.</p>
                <p>Tomato esta hecho generalmente en Python mediante unas librerías, como por ejemplo: matplotlib (Generamos graficas), os para detectar nuestro hardware, time para que nos importe la hora, el día. Cuando iniciamos Tomato, la misma aplicación gracias a esas librerías detecta el hardware (Disco Duro, RAM, CPU, el uso de Internet "Subid y Descarga", la temperatura de nuestro dispositivo)</p>
                <img src="img/tomato.jpg">
                <img src="img/tomato2.jpg">
                <img src="img/tomato3.jpg">
                <img src="img/tomato4.jpg">
                <img src="img/tomato5.jpg">
            </article>
        </section>
    </div>
</main>
<style>
    <?php include "main.css";?>
</style>
