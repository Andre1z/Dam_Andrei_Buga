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
                <p>Esta aplicacion de escritorio hecha en Python consiste en la generación de tickets para enfocada para los dependedientes, para hacerles la vida un poco mas facil con esta aplicación. Tiene dos versiones: 1.- Tiene una version en modo CLI que el dependiente de la tienda tiene que teclear el id del producto y poner la cantidad. 2.- En la version GUI es lo mismo pero de una forma mas atractiva a la vista, hay dos botones, uno para añadir otro producto y el otro para terminar con el ticket, pulsamos en Generar ticket (PDF), esto nos generara un ticket en formato PDF para que se pueda imprimir. El proyecto se creo usando variables, constantes e imports, ya que el proyecto es grande y por eso hemos hecho imports, tanto de librerias como de codigo. En este proyecto hemos creado un archivo en Python que nos sirve para generar muchos productos (unicos) y guardarlos en un archivo json llamado "productos_unicos.json" entonces si hemos creado un archivo para generar los productos, tambien hemos creado otro archivo en este caso para cargar los productos del json a la aplicación.</p>
                <video controls="" autoplay="" src="videos/ticket.mp4" width="1024" height="600"></video>
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>17.- Aplicación ValuMate</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_valumate.jpg">
                <p>Esta aplicación de ValuMate fue creada en usado los framworks de React + Vite + Tailwindcss. Esta web sirve para ver las conversiones valutarias y de unidades: € a $ o Km a m. Para ejecutar esta aplicación nos hemos ido a la carpeta de donde tenemos todos los contenidos de la app y hemos abierto un terminal (En mi caso PowerShell) y hemos puesto este comando "npm run dev" que sirve para lanzar el servidor (de pruebas) para poder ver y usar la aplicación con total normalidad. Para ejecutar esta aplicación debemos tener instalado NodeJs, cuando tengamos Node a continuación tenemos que crear un proyecto con react, cuando lo tengamos como esta aplicación usa Vite también lo tenemos que instalar (estando dentro de la carpeta del proyecto creado) También tenemos que instalar Tailwindcss (si estamos usando VSC como en mi caso recomiendo instalar la extensión de Tailwindcss IntelliSense). Entonces nuestro proyecto ya esta listo para modificarlo, la instalación se nos a creado unas carpetas llamadas src public y node_modules. Para poder crear nuestra pagina con estos frameworks, hemos editado el archivo "App.jsx" para hacer nuestra aplicación, este código contiene JavaScript y HTML mezclado y el nombre de las clases de cada etiqueta es Tailwindcss (Tienen Css incorporado en la linea, sin usar la etiqueta de style) En este archivo hemos importado varias dependencias que hemos usado en nuestra App Web.</p>
                <img src="img/valumate.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>18.- Aplicación Consumo</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_consumo.jpg">
                <p>Esta aplicación de para medir el consumo fue creada en Python, para saber cuanto consumen las aplicaciones si se están ejecutándose, con este proyecto sirve para ver que aplicaciones consumen mas energía y cuales menos, para luego saber cuando vayamos a desarrollar una aplicación tener en cuenta el consumo energético que puede consumir. El proyecto solo tiene una carpeta llamada main, donde allí están los archivos principales del proyecto, todos los archivos al principio tienen un docstring con la información importante de que va el archivo, todos los archivos se ha usado la estructura de Programación Orientada a Objetos, el archivo que debemos ejecutar para medir los procesos es (process_detector.py). Este archivo lo que hace es detectar todos los Pid de procesos que están ejecutados en ese momento, este script de Python tiene se actualiza dinamicamente, es decir (Si cerramos un proceso, entonces se nos mostrara el numero de proceso y el nombre de la aplicación que se ha terminado), cuando queramos finalizar la ejecución del programa pulsamos cualquier tecla para parrarlo y que nos diga el total de MWh que se han consumido durante la ejecución.</p>
                <video controls="" autoplay="" src="videos/consumo.mp4" width="1024" height="600"></video>
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>19.- Aplicación DarkMagenta</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_darkmagenta.jpg">
                <p>Esta aplicación de DarkMagenta esta hecha en Python y sirve para buscar y remplazar palabras/frases con cualquier extension (Que contenga texto). El funcionamiento de esta aplicación es muy simple, primero de todo debemos seleccionar un archivo para poder empezar a editarlo, entonces cuando lo hayamos hecho, en el apartado de buscar, ponemos la palabra que queremos buscar y pulsamos el boton de "Buscar Palabra" entonces nos saltara un mensaje diciendo "Se encontraron X coincidencia(s) para 'Y palabra'. O bien si no se han encontrado palabras "No se encontraron coincidencias para "X palabra"." Entonces si queremos remplazar una/varias palabras del documento entonces ponemos la palabra que queremos que se remplaze en el otro apartado de la derecha, cuando hayamos puesto la palabra entonces pulsamos el boton de "Aplicar Remplazo" entonces nos saldra un mensaje "El reemplazo se realizó correctamente.", cuando tengamos la palabra remplazada, pulsamos en "Guardar cambios" para guardar. Al hacerlo, nos saltara un mensaje "El archivo se ha guradado exitosamente." Tambien en la aplicación tenemos un boton para poder cambiar la interfaz en modo oscuro o claro. El archivo principal tiene al principio del archivo, un docstring con la información del archivo. La aplicación fue desarrollada en Python usando la libreria Tkinter para hacer la aplicación con GUI (Grafic User Interface). La hemos desarrollado usando programación orientada a objetos. Con clases, funciones, variables. Esta aplicación la hemos convertido como ejecutable (.exe) para que el usuario no tenga que depender de tener instalado Python en su equipo.</p>
                <video controls="" autoplay="" src="videos/darkmagenta.mp4" width="1024" height="600"></video>
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>20.- Aplicación DarkOrchid</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_darkorchid.jpg">
                <p>Esta aplicación de Darkorchid esta hecha en php, sirve para realizar reuniones con audio (tipo Zoom) tiene un chat integrado para poder escribir en caso de no disponer de micrófono, para acceder a esta aplicación, primero nos tenemos que registrar, (El usuario se guardara en una base de datos llamada "users.db", donde allí se guardara el nombre de usuario y también la contraseña para el mismo usuario "Que estará hasheada"), entonces cuando el usuario se haya registrado en la aplicación, entonces deberá ir al login para poder entrar con su cuenta dentro de la aplicación, por fin dentro el usuario deberá iniciar llamada, al iniciar llamada (En caso que tenga webcam, y micrófono se iniciar correctamente, pero cuando no tiene cámara ni micrófono, no se podrá iniciar la llamada, solo podrá escribir en el chat.) El proyecto fue desarrollado por módulos, es decir cada carpeta tiene sus módulos dentro /assests, /css, /database, /js y en la raíz encontramos Index.php, login.php, logout.php y register.php. Cada archivo tiene el código, bien estructurado, usando imports para que el archivo principal no sea tan grande, también poniendo docstrings y comentarios. El index.php para poder acceder hemos puesto una función, que compruebe si el usuario a iniciado sesion, en caso contrario lo redirige al login, pero , si el usuario no tiene cuenta, abajo del formulario de inicio de sesión tiene  un botón para irse al formulario de registro.</p>
                <img src="img/darkorchid.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>21.- Aplicación Deeppink</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_deeppink.jpg">
                <p>Esta aplicación de Deeppink esta hecha en php, sirve para realizar informes mediante una URL que tenemos que poner en la "casilla de introducir URL" Este informe que nos ha generado sirve para ver si esa pagina web, tiene "Titulo, una descripción del sitio, que tipo de contenido contiene, que palabras usa, cuantos y que etiquetas tiene (h1, h2 ,h3, h4, h5, h6), si contiene Robots.txt, si tiene un Sitemap.xml, si contiene imagenes y si la pagina tiene un favicon", podemos guarda el informe pulsando el boton de abajo "Guardar Informe". Este informe se nos guardara en una base de datos SQLite, donde allí también se guardaran los usuarios que se registren (Que deben tener cuenta para poder entrar en la pagina), tambien se guarda el usuario administrador, donde el puede ver todos los usuarios que estan registrados, o bien todos los informes que se han guardado a la base de datos. Cada archivo de código contiene un docstring inicial que sirve para entender de que va el archivo, tambien dentro del archivo podemos encotrar comentarios entre el código. DeepPink.php, se ha usado la programación orientada a objetos, mediante clases, funciones (Tanto publicas como privadas), variables. Cuando Iniciamos sesion podemos seleccionar el idioma con el que queremos iniciar (Ingles, Español, Frances, Aleman), dependiendo del idioma con el que nosotros iniciemos se nos pondra ese idioma en el index.php, gracias al archivo "translations.csv" que contiene todas las palabras claves de nuestra aplicación. </p>
                <img src="img/deeppink.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>22.- Aplicación Grey</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_grey.jpg">
                <p>Esta aplicación de Grey esta hecha en php, sirve para previsualizar archivos .ods para verlos en esta aplicación, es decir creamos un Excel ponemos los datos que necesitamos poner, entonces lo descargamos en formato .ods para poder añadirlo a la aplicación Grey. Esta aplicación se puede considerar como aplicación de gestión empresarial ya que un Excel lo pasamos de una manera muy simple o lo podemos previsualizar en nuestra pagina. Pero primero de todo debemos tener una cuenta, para crearnos una cuenta, al entrar en el index.php sin cuenta nos redirigirá automáticamente al login, entonces el en el login, abajo del formulario de inicio sesión tenemos un botón que si lo pulsamos, nos redirigirá al formulario para registrarnos, nos pedirá que pongamos un nombre de usuario, una contraseña y que confirmemos la misma contraseña (poner la misma contraseña de nuevo), entonces cuando hayamos pulsado el botón de "Registrar", nos redirigirá en la pagina del login para que nosotros podamos poner el usuario y la contraseña creados, este usuario no se guarda en una base de datos como tal, sino que se guarda en un archivo JSON, en el archivo JSON guarda el usuario y la contraseña (La contraseña Hasheada), en el login tambien podemos seleccionar el idioma para poder iniciar sesión (Español, Ingles, Chino, Coreano, Italiano, Frances, Alemán y Japones), cuando iniciemos sesión con el idioma seleccionado se nos pondrá toda la aplicación con ese idioma, gracias al archivo "translations.csv". Todos los archivos .ods que insertemos en la aplicación se nos guardaran en una base de datos SQLite con la información de cada columna. </p>
                <img src="img/grey.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>23.- Aplicación Hotpink</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_hotpink.jpg">
                <p>Esta aplicación de HotPink esta hecha en php, sirve para, primero de todo el archivo (nidex.php) se conecta a la base de datos de MySQL para sacar información de la base de datos llamada (proyectoapple), para conectarnos a la base de datos con el usuario, contraseña y usaremos la tabla de categoriras para generar cuatro archivos (salida.csv, salida.json, salida.sqlite3 y salida.xml), que hemos convertido la información de la tabla "categoraias" a diferentes, formatos y luego hemos usado todos esos archivos para incrustar la información de cada archivo en index.php para poder leerla. El proyecto es muy simple solo hay dos archivos, uno "andrei_hotpink.php" que se conecta a la base de datos y el index.php que saca la información y convierte toda la tabla SQL a scv, json, xml, sqlite3. Todos los archivos contienen comentarios, variables, funciones, booleanos. </p>
                <img src="img/hotpink.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>24.- Aplicación Khaki</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_khaki.jpg">
                <p>Esta aplicación de khaki esta hecha en php, sirve para añadir eventos dentro de un calendario para que nos podamos organizar mejor, todos los eventos que se creen se iran a una base de datos, que tenemos la conexion a la base de datos mediante el archivo (db_config.php), para conectarnos debemos poner bien el nombre de host, el nombre de usuario, la contraseña del usuario, y el nombre de la base de datos al que nosotros nos tenemos que conectar para que los podamos leer y crear los registros. El codigo, esta muy bien estructurado, hay unas 7 carpetas en el proyecto, y solo el index.php esta en la raiz del proyecto, se han usado imports para entrelazar los diferentes archivos usando rutas relativas (ejemplo: ../css/style.css), para la conexion de la base de datos se a usado variables para definir la conexion a la base de datos para luego poder import esas variables a los archivos que necesiten crear o leer los registro de esa BD, se han usado boleeanos para la logica. En esta aplicación no se necesita tener una cuenta, (Solo la conexion correcta a la BD.). </p>
                <img src="img/khaki.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>25.- Aplicación Lavenderblush</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_lavenderblush.jpg">
                <p>Esta aplicación de lavenderblush esta hecha en php, sirve para la creación, edición y almacenamiento de "clases" (estructuras o esquemas), a través de una interfaz de arrastrar y soltar. Además, permite exportar dichas clases a archivos PHP mediante el script "save_classes.php", Para poder usar la aplicación primero de todo necesitas una cuenta, se lo tienes que comunicar al administrador para que te cree una cuenta, con usuario y contraseña, esa cuenta se guardara en una base de datos (dentro del proyecto) en formato SQLite (data.sqlite) Cuando el usuario tenga cuenta y haya iniciado sesión, entonces el, podrá crear proyectos (dandole el nombre que quiera), el usuario al seleccionar ese proyecto deberá darle al botón de "Añadir clase" para crear una clase entonces el usuario podrá duplicar esa misma clase o bien podrá eliminarla, todas las clases se guardan automáticamente en la base de datos SQLite, (Se nos muestra un alert que nos informa que el ID X se ha guardado correctamente). El código esta muy bien estructurado tiene dos carpetas en la raiz (llamdos css/ y scripts/ en la carpeta de css se encuentra todo el estilo de la aplicación, y en el js se encuentra toda la lógica en JavaScript para toda la aplicación), la base de datos (data.sqlite) se encuentra en la raíz. Todos los códigos tienen comentarios para guiarnos. </p>
                <img src="img/lavenderblush.jpg">
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>26.- Aplicación Mintcream</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_mintcream.jpg">
                <p>Esta aplicación de mintcream esta hecha en php, esta aplicacion de mintcream es un foro de comunidad, que sirve para conversar , y tener discusiones con otros usuario, pero para poder participar en foro, los nuevos usuarios se pueden registrarse mediante el formulario de registro y luego iniciar sesion para participar en el foro. Los usuarios autentificados pueden crear temas, hilos y publicaciones. Al adjuntar imagenes, el nombre del archivo se almacena en la base de datos, y la imagen se guarda en la carpeta "uploads", al pulsar en una imagen de una publicación, se abrira un modal centrado en la pantalla que permite verla en mayor detalle. Los superadministradores pueden gestionar usuarios (crear, actualizar roles y elimiar) desde el panel de administración. El proyecto esta muy bien estructurado, (bloques/, css/, databases/, inc/ y uploads/) donde cada archivo tiene comentarios, algun que otro docstring, boleanos, variables, conexiones a la base de datos, javascript, funciones. Cuando hayamos iniciado sesion debemos seleccionar el tema que queramos ver las discusiones del foro, luego de los temas, tendremos que seleccionar un hilo, cuando hayamos seleccionado un hilo, entonces nos aparecera el chat donde podremos poner comentarios, subir una imagen que nosotros queramos, darle reply a un usuario del foro, previsualizar una imagen con modal.</p>
                <video controls="" autoplay="" src="videos/mintcream.mp4" width="1024" height="600"></video>
            </article>
        </section>
        <hr>
        <section>
            <article id="post">
                <h2>27.- Aplicación Palegreen</h2>
                <p>Por empezar la aplicación tiene la siguiente estructura</p>
                <img src="img/estructura_palegreen.jpg">
                <p>Esta aplicación de palegreen esta hecha en html, esta aplicacion de palegreen es un foro de comunidad, que sirve para conversar , y tener discusiones con otros usuario, pero para poder participar en foro, los nuevos usuarios se pueden registrarse mediante el formulario de registro y luego iniciar sesion para participar en el foro. Los usuarios autentificados pueden crear temas, hilos y publicaciones. Al adjuntar imagenes, el nombre del archivo se almacena en la base de datos, y la imagen se guarda en la carpeta "uploads", al pulsar en una imagen de una publicación, se abrira un modal centrado en la pantalla que permite verla en mayor detalle. Los superadministradores pueden gestionar usuarios (crear, actualizar roles y elimiar) desde el panel de administración. El proyecto esta muy bien estructurado, (bloques/, css/, databases/, inc/ y uploads/) donde cada archivo tiene comentarios, algun que otro docstring, boleanos, variables, conexiones a la base de datos, javascript, funciones. Cuando hayamos iniciado sesion debemos seleccionar el tema que queramos ver las discusiones del foro, luego de los temas, tendremos que seleccionar un hilo, cuando hayamos seleccionado un hilo, entonces nos aparecera el chat donde podremos poner comentarios, subir una imagen que nosotros queramos, darle reply a un usuario del foro, previsualizar una imagen con modal.</p>
                <video controls="" autoplay="" src="videos/palegreen.mp4" width="1024" height="600"></video>
            </article>
        </section>
    </div>
</main>
<style>
    <?php include "main.css";?>
</style>