from flask import Flask
from flask_cors import CORS
import mysql.connector

aplicacion = Flask(__name__)
CORS(aplicacion)

servidor = "localhost"
usuario = "blog"
contrasena = "blog"
base_de_datos = "blog"

conexion = mysql.connector.connect(
    host=servidor,
    database=base_de_datos,
    user=usuario,
    password=contrasena
)

@aplicacion.route('/')
def inicio():
    entradas = []
    peticion = "SELECT * FROM entradas ORDER BY fecha DESC;"
    cursor = conexion.cursor(dictionary=True)
    cursor.execute(peticion)
    filas = cursor.fetchall()
    for fila in filas:
        entradas.append(fila)
    return entradas



aplicacion.run()
