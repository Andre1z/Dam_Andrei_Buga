import mysql.connector                 # Importo el conector de MySQL

servidor = "localhost"                 # Creo una variable en la que apunto a mi servidor
usuario = "miempresa"                  # Creo una variable para definir el usuario
contrasena = "miempresa"               # Creo una variable 
base_de_datos = "miempresa"

conexion = mysql.connector.connect(
    host=servidor,
    database=base_de_datos,
    user=usuario,
    password=contrasena
)

peticion = "SELECT * FROM clientes;"

cursor = conexion.cursor()

cursor.execute(peticion)
filas = cursor.fetchall()
