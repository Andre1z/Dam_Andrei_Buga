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
                <p>Esta aplicación fue creada con PHP, JavaScript y CSS para que un administrados pueda gestionar una base de datos cualquiera con este software, en los comandos JS se lanza una petición fetch a la base de datos, que PHP luego hace una petición SQL contra la base de datos mediante JavaScript, entonces cuando la base de datos responde lo hace también mediante JS para que luego PHP la incruste en pantalla. DarkSlateBlue esta creado como si fuese un panel de control de WordPress con el estilo similar a WordPress, solo que con unos pequeños retoques, por ejemplo los colores son diferentes al de WP. Cuando un administrador quiera añadir un registro lo puede hacer, porque hay un botón a la parte inferior derecha (+) que esta programado mediante JS, que cuando se pulse el botón, lo detecte y sobresale un menú con los campos a rellenar para añadir el nuevo registro, los campos y todo también esta hecho en JS, que detecte la tabla en la que este, que detecte el nombre de los campos a poner. Cuando el administrador termina de poner los datos, pulsa un botón de "añadir", ese botón manda un "INSERT" en la BD donde se aplica todo lo que puso el administrador en el menú. Para actualizar un registro el administrador debe hacer doble clic en el registro que quiere cambiar, esto hace que JS detecte ese doble clic con el raton y puedes editar el registro, cuando haya terminado con simplemente dar un clic fuera del cuadrado de edición entonces JS cierra la posibilidad de editar ese campo y automáticamente manda el resultado cambiado a la base de datos . Para eliminar un registro se debe ir a la parte derecha de los registros donde hay un botón (X) que hace un "DELETE FROM 'tabla Y' WHERE 'identificador = X'", JS manda este comando contra la BD y entonces la BD devuelve la petición hecha borrando el registro seleccionado.</p>
                <img src="img/darkslateblue.jpg">
                <img src="img/darkslateblue2.jpg">
                <img src="img/darkslateblue3.jpg">
                <img src="img/darkslateblue4.jpg">
                <img src="img/darkslateblue5.jpg">
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
        <hr>
        <section>
            <article id="post">
                <h2>5.- Aplicación Sienna</h2>
                <p>Sienna es un videojuego de cubos, cuando inicias Sienna te pedira que inicies sesion, en caso que no tengas cuenta, te puedes crear una introduciendo correo electronico, contraseña. Puedes hacer todo lo que quieras, contruir, romper bloques.</p>
                <p>Sienna esta creado en PHP, mediante aframe.io y obviamente tambien tiene archivos JS, CSS. Los bloques son como "div", utilizando aframe.io para crear paginas web en 3 dimensiones. Para crear a nuestro personaje hemos usado la siguiente etiqueta ("a-entity") y luego los siguiente parametros("id: que es el nombre de nuestro jugador, position: declara donde esta posicionado nuestro jugador en el mapa, wasd-controls: los controles que usamos para movernos con nuestro personaje, look-controls: detecta nuestro raton y la mira de nuestro personaje se dirige donde esta el puntero, simple-gravity: Determina una gravedad a nuestro personaje") algunos scripts no están creados localmente simplemente usan la extensión de aframe y también algunos estilos están importados con aframe.</p>
                <img src="img/sienna.jpg">
                <img src="img/sienna2.jpg">
                <img src="img/sienna3.jpg">
                <img src="img/sienna4.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>6.- Aplicación Lemonchiffon</h2>
                <p>Lemonchiffon es una aplicacion para enviar y recibir correos electronicos, muy simple de usar recomendado para empresas.</p>
                <p>Esta aplicacion es una aplicacion creada en PHP CSS y JavaScript, en este caso abunda mas JavaScript porque se conecta en el servidor de correo electronico, utiliza el pop/imap de nuestro proveedor de correo, nuestro usuario de esa cuenta de nuestro proveedor y también la contraseña. Tiene la estructura basica de un cliente de correo electronico, es decir con imap creamos el mailbox, es decir nuestra bandeja de entrada, este script esta configurado por si no tenemos ningun correo enviado entonces se queda en blanco, tambien tiene unas variables como folder, from, to, adsunto, fecha que vienen a ser: folder, es la carpeta, from de que direccion viene ese correo electronico, to es a que dirección de correo electronico va destinado ese correo electronico, el asunto es el motivo porque enviamos el correo electronico, fecha detecta exactamente la hora, el dia, los minutos. Tambien nuestra aplicacion cuenta con un archivo JSON, donde este archivo hace de .config donde ponemos el nombre del host (pop) el nombre de usuario de la cuenta es decir (ejemplo@ejemplo.com) y la contraseña de tu cuenta de correo electronico.</p>
                <img src="img/lemonchiffon.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>7.- Aplicación Thistle</h2>
                <p>Thistle es una aplicacion para monitorizar de donde se conectan a nuestra pagina web (pais, tipo de navegador, el sistema operativo, el numero de visitas en los ultimos 15 dias). Es para detectar si hubo un ataque en nuestra pagina web.</p>
                <p>Esta aplicación es una aplicación creada en PHP y Python, también usamos una base de datos para guardar toda la información de los virtualhost. Python lo hemos usado para que nos genere imágenes con la librería de matplotlib, para conectarnos a la base de datos se uso la librería de mysql.connector, también se ha usado la librería de JSON también es una alternativa para almacenar datos como por ejemplo las tablas, el nombre de usuario que tiene acceso a la base de datos, el host (si es localhost o otro), almacena también la contraseña del usuario para tener acceso a esa base de datos. Luego en Python hemos recogido toda esa información para hacer un fetch con los datos, en esta aplicación se usaron variables para almacenar los datos y luego ejecutarlos contra la base de datos.</p>
                <img src="img/thistle.jpg">
                <img src="img/thistle2.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>8.- Como hacer un deploy</h2>
                <p>En este apartado te explico como pasar una aplicación desde tu ordenador a un servidor Linux.</p>
                <p>Por empezar abrimos un terminal (CMD en caso de Windows) y nos conectamos al servidor mediante SSH, poniendo el nombre de usuario @ ip/DNS (ejemplo: ssh root@192.168.1.172 o ssh root@nombre_de_dominio.com) tenemos que decir que somos de confianza y después nos indicara que pongas la contraseña del servidor. Entonces cuando estemos dentro comprobad que tengáis instalado apache2, luego hacer un cd a (cd var/www/html),a continuación ponemos el siguiente comando para clonar el repositorio que quieras (sudo git clone https://github.com/usuario/nombre_repositorio.git) cuando lo tengamos clonado aseguraros de darle los permisos necesarios a apache, usamos este comando para que apache sea el "owner" del repositorio (sudo chown -R www-data:www-data /var/www/html/nombre_repositorio) a continuación le otorgamos los permisos a nuestro repositorio clonado desde GitHub (sudo chmod -R 755 /var/www/html/nombre_repositorio), a continuación comprobad que el repositorio esta clonado perfectamente. Luego tenemos que comprobar si nuestro repositorio tiene por ejemplo archivos de "python, php" instalemos todo lo necesario para que las aplicaciones funcionen correctamente por ejemplo: (sudo apt install python3-pip , sudo apt install php , sudo pip3 install psutils , sudo pip3 install matplotlib). Si has ejecutado un archivo .py y no te da errores pasamos al siguiente paso. Para comprobar que tu pagina/aplicación web funciona, dirígete a tu navegador de confianza y pon en la URL:(tu_ip/tu_repositorio) ejemplo: (192.168.1.172/andrei-tomato)</p>
                <video controls="" autoplay="" src="videos/deploy_to_server.mp4" width="1024" height="600"></video>
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>9.- Aplicación Blue</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_blue.jpg">
                <p>Esta aplicación de Blue tiene como objetivo la creación de gráficos: Gráficos de barras, Grafico de líneas, Grafico de tarta, Gráficos de anillo, Grafico de barras apiladas y Grafico de Radial. Estos gráficos se generan mediante el archivo charts.js que esta en la carpeta js. Los usuarios para crearlos hemos generado con el archivo init_db.php, una database.sqlite donde allí hemos guardado todos los usuarios registrados, para que puedan iniciar sesión, hemos usado el archivo login.php que hace una petición a la base de datos que seleccione la tabla usuarios, dentro de esa tabla comprueba si el usuario existe, luego comprueba si la contraseña del usuario es correcta, si lo es le deja entrar, en caso contrario no le deja entrar. Los gráficos al crearse se crean como SVGs, register.php tiene la característica de crear en la base de datos nuevos usuarios con contraseña. En todos los archivos hemos usado variables ($username, $name, $email, $password, $confirm_password, $error...), también hemos usado los booleanos (if, else) para controlar "Si el usuario y la contraseña son correctos inicia sesión, en caso contrario error." En los archivos JS hemos usado functions y constantes, las funciones para declarar por ejemplo cada tipo de grafico y dentro de esas funciones las constantes, que hemos usado para declarar diferentes opciones.</p>
                <img src="img/blue.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>10.- Aplicación Converter</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_converter.jpg">
                <p>Esta aplicacion de converter tiene como objetivo convertir una imagen entre los siguientes formatos: JPEG, PNG, BMP, GIF, WEBP, TIFF. Es decir si nosotros tenemos una imagen con extension webp con esta aplicación hecha en Python podremos convertirla a el formato que nosotros deseemos entre los que hay. La Apliación hecha en Python y compilada a un archivo ejecutable para Windows (.exe) esta hecha con las siguientes caracteristicas. 1.- Primero de todo hemos importado la libreria OS para que cuando nosotros le demos clic a seleccionar un archivo nos detecte la carpeta donde esta el archivo seleccionado, hemos usado la libreria tkinter para hacer un GUI de una manera muy simple, y por ultimo hemos usado la libreria PIL hemos importado Image para que nosotros podamos realizar esas conversiones de archivos de imagen. Hemos creado funciones para que el programa detecte cuando arrastramos una imagen y detecte de de que ubicacion la hemos arrastrado, hemos usado variables globlas, para la ruta de entrada, hemos definido la ruta de salida, hemos usado if, else para comprobar si la funcion arranca entonces se ejecuta si no da error y no continua. Hemos usado estructuras de control como try except para controlar si por ejemplo tenemos instalado una libreria entonces, el programa continua sin dar algun error. Esta aplicacion fue creada en Windows 10/11 y se puede utilizar tanto en Windows 10 o 11. Ya que hemos compilado el python a un .exe </p>
                <video controls="" autoplay="" src="videos/converter.mp4" width="1024" height="600"></video>
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>11.- Aplicación Hoteles</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_hoteles.jpg">
                <p>Esta aplicacion de hoteles tiene como objetivo ayudar a los hoteles para poder gestionar mejor las habitaciones que tienen libres, o no, por empezar el administrador de la aplicación debera dar de alta a los trabajadores mediante un formulario de registro, en ese formulario le pedira que ingrese un usuario y una contraseña, el usuario registrado se guardara en una base de datos MySQL la contraseña se guardara de forma hasheada para que solo el trabajador que le han hecho la "cuenta" para gestionar las habitaciones del hotel sepa cual es la contraseña real para iniciar sesion. Cuando inicia sesion con usuario y contraseña, lo que hace internamente el programa es: 1.- Irse a la base de datos. 2.- Mostrar en la tabla usuarios si el usuario y la contraseña existe. 3.- Si el usuario y la contraseña son correctos lo deja pasar al inicio, pero si son incorrectos le pedira que vuelva a introducir los datos de forma correcta. Cuando este en el inicio podra agregar una habitación y decir si esta disponible o no, podra poner el precio de la habitación, podra poner una descripcion sobre la habitación y podra decir de que tipo de habitación se trata. Este proceso internamente es un Create en la tabla habitaciones, y pone todos los datos que haya puesto el trabajador. Entonces si pulsa en ver habitaciones, podra ver todas las habitaciones que haya creado, desde alli tambien se puede eliminar y editar las habitaciones. Para la creacion de esta aplicacion hemos usado Microsoft VSC en Windows 11, hemos usado diferentes variables ($sql, $room_number, $room_type, $price, $description)</p>
                <img src="img/hoteles.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>12.- Aplicación LightGoldeRodYellow</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_lightgoldenrodyellow.jpg">
                <p>Esta aplicacion de generacion de prompts tiene como objetivo generar un prompt donde se pueda visualizar todo lo que contiene una carpeta en especifica. Para ello hemos usado Python, para crear la aplicación y en Python hemos usado las diferentes librerias para poder hacer que la aplicaciones tenga GUI (Grafic User Interface) para hacer la generación de prompts mas facil para el usuario final. Esa interfaz grafica la hemos creado usando la libreria de Tkinter, con botones labels. En la creación de esta aplicacion hemos usado IDLE de python 3.13 en Windows 11, la aplicación funciona en cualquiera sistema operativo debido a la libreria OS implementada al proyecto. Hemos puesto comentarios y docstrings para que sepamos que hace cada funcion, hemos definido constantes, hemos usado estructuras de control (Try Except)</p>
                <img src="img/lgry.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>13.- Aplicación Simulación</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_simulacion.jpg">
                <p>Esta aplicacion de simulación de vida artificial esta creada mayormente usando JavaScript, pero la mostrar la información por pantalla tenemos un index.html donde ese index tiene los controles tanto de los agentes (Para ver a que agente seguimos) y tambien tiene los controles de detener y reanudar la Simulación. Pasamos a los archivos JS, el archivo que controla los agentes (npcWorker.js) tiene el objetivo de controlar a todos los agentes y tambien determinar lo que hacen durante la simulación. En este codigo hemos usado constantes y funciones (Iniciar los agentes), tambien hemos declarado variables como (agents, terrainLayer, scaleFactor). En el archivo de persona, hemos hecho uso de la Programación orientada a objetos (POO) definiendo una clase "Persona" que tiene los siguientes parametros. Y en utils hemos declarado varias funciones para el comportamiento del entorno con las personas.</p>
                <img src="img/simulacion.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>14.- Aplicación PvZ</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_pvz.jpg">
                <p>Este es un videojuego web que recrea Saga mitica de Plantas vs Zombies, este juego esta creado con una estructura modular, cada cosa esta a su sitio. Para poder jugar, primero se necesita crear un usuario, que te pedira nombre de usuario (que no exista), una contraseña y le pedira que confirme esa contraseña. Al darle al boton de "Registrarse" el usuario sera redirigido en la pagina de login para que pueda iniciar sesion. Este proceso de registro y login internamente tiene una base de datos, es decir todos los usuarios que se registren para poder jugar se guardaran en una base de datos, la contraseña que mete el usuario cuando la crea, en la base de datos de guarda hasheada (Que la contraseña se encripta para mas seguridad), cuando el usuario intenta acceder al juego poniendo bien el usuario, pero mal la contraseña le salta un error de contraseña incorrecta, pero si el usuario mete ambas cosas incorrectas entonces le salta un error de usuario y/o contraseña incorrectos. Esta aplicaciones esta hecha principalmente en PHP, en PHP hemos usado muchas variables para definir la conexion a la base de datos, hemos usado estrucutras de control (try, catch, die), tambien hemos creado diferentes archivos JS para la logica del juego, la logica de autentificación de los usuarios.</p>
                <img src="img/pvz.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>15.- Aplicación Peggle</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_peggle.jpg">
                <p>Este es un videojuego de Escritorio que representa a Peggle Night, el jugador no tiene que iniciar sesión o crearse una cuenta para poder jugar, Simplemente ejecuta el archivo game.py y empieza la partida. El Proyecto esta estructurado de una manera muy simple para el programador, ya que si ocurre algún error al ejecutar el juego el ya sabrá de que archivo es que da error. Cuando se ejecuta el juego se carga un nivel generado aleatoriamente desde level_generator.py, que genera un nivel totalmente aleatorio con los diferentes bloqueas que se tienen que impactar con la bola, cuando el jugador impacte todas los bloques Naranjas pasa al siguiente nivel, que se le genera automáticamente cuando detecta que ya no hay mas bloques naranjas que chocar. Para este juego se han usado mucha programación orientada a objetos, para definir la bola, el terreno, las partículas, los bloques. Hemos definido cada cosa usando constantes y variables (GRAVITY o apply_gravity). El juego fue creado usando la GUI de PyGame. Cuando entramos al juego tenemos dos botones: 1.- El de abajo derecha sirve para reiniciar la recarga aleatoria del nivel. 2.- Y el segundo sirve para ajustar el audio mediante dos barras (Música y Efectos de Sonido), esa configuración del sonido se guarda en un archivo llamado audio_config.json que allí esta guardado el volumen del juego, y cuando cierras el juego y lo vuelves a abrir el juego lee los valores que tiene el JSON y los carga en la partida. Este proyecto se desarrollo para Windows 10/11 usando Microsoft VSC.</p>
                <img src="img/peggle.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>16.- Aplicación Ticket</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_ticket.jpg">
                <p>Este es un videojuego web que recrea Saga mitica de Plantas vs Zombies, este juego esta creado con una estructura modular, cada cosa esta a su sitio. Para poder jugar, primero se necesita crear un usuario, que te pedira nombre de usuario (que no exista), una contraseña y le pedira que confirme esa contraseña. Al darle al boton de "Registrarse" el usuario sera redirigido en la pagina de login para que pueda iniciar sesion. Este proceso de registro y login internamente tiene una base de datos, es decir todos los usuarios que se registren para poder jugar se guardaran en una base de datos, la contraseña que mete el usuario cuando la crea, en la base de datos de guarda hasheada (Que la contraseña se encripta para mas seguridad), cuando el usuario intenta acceder al juego poniendo bien el usuario, pero mal la contraseña le salta un error de contraseña incorrecta, pero si el usuario mete ambas cosas incorrectas entonces le salta un error de usuario y/o contraseña incorrectos. Esta aplicaciones esta hecha principalmente en PHP, en PHP hemos usado muchas variables para definir la conexion a la base de datos, hemos usado estrucutras de control (try, catch, die), tambien hemos creado diferentes archivos JS para la logica del juego, la logica de autentificación de los usuarios.</p>
                <img src="img/ticket.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>17.- Aplicación ValuMate</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_valumate.jpg">
                <p>Este es un videojuego web que recrea Saga mitica de Plantas vs Zombies, este juego esta creado con una estructura modular, cada cosa esta a su sitio. Para poder jugar, primero se necesita crear un usuario, que te pedira nombre de usuario (que no exista), una contraseña y le pedira que confirme esa contraseña. Al darle al boton de "Registrarse" el usuario sera redirigido en la pagina de login para que pueda iniciar sesion. Este proceso de registro y login internamente tiene una base de datos, es decir todos los usuarios que se registren para poder jugar se guardaran en una base de datos, la contraseña que mete el usuario cuando la crea, en la base de datos de guarda hasheada (Que la contraseña se encripta para mas seguridad), cuando el usuario intenta acceder al juego poniendo bien el usuario, pero mal la contraseña le salta un error de contraseña incorrecta, pero si el usuario mete ambas cosas incorrectas entonces le salta un error de usuario y/o contraseña incorrectos. Esta aplicaciones esta hecha principalmente en PHP, en PHP hemos usado muchas variables para definir la conexion a la base de datos, hemos usado estrucutras de control (try, catch, die), tambien hemos creado diferentes archivos JS para la logica del juego, la logica de autentificación de los usuarios.</p>
                <img src="img/valumate.jpg">
            </article>
        </section>
    </div>
</main>
<style>
    <?php include "main.css";?>
</style>
