from flask import Flask
from flask_cors import CORS
import mysql.connector

aplication = Flask(__name__)
CORS(aplication)

server = "localhost"
username = "capitulos"
password = 'capitulos'
db = 'examen_bd_capitulos'

conection = mysql.connector.connect(
    host=server,                                        # Le indico el nombre del servidor
    database=db,                                        # Le indico el nombre de la base de datos
    user=username,                                      # Le indico cual es el nombre de usuario
    password=password                                   # Le indico cual es la contraseña
)

@aplication.route('/')
def inicio():
    capitulos = []
    peticion = "SELECT * FROM capitulos;"
    cursor = conection.cursor(dictionary=True)
    cursor.execute(peticion)
    filas = cursor.fetchall()
    for fila in filas:
        capitulos.append(fila)
    return capitulos
aplication.run()
