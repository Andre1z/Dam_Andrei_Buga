import mysql.connector                                  # Importo la libreria mysql

server = 'localhost'                                    # Defino cual es el nombre del servidor
username = 'capitulos'                                  # Defino cual es el nombre de usuario
password = 'capitulos'                                  # Defino cual es la contraseña del usuario
db = 'examen_capitulos'                                 # Defino cual es el nombre de la base de datos


conection = mysql.connector.connect(                    # Me conecto a la base de datos
    host=server,                                        # Le indico el nombre del servidor
    database=db,                                        # Le indico el nombre de la base de datos
    user=username,                                      # Le indico cual es el nombre de usuario
    password=password                                   # Le indico cual es la contraseña
)
