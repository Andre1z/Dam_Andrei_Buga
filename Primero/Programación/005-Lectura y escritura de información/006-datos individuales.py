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

for fila in filas:
    print(fila)
    print("###################################")
    print("El identificador es:",fila[0])
    print("El nombre es:",fila[1])
    print("El apellido es:",fila[2])
    print("El email es:",fila[3])
    print("La localidad es:",fila[4])
    print("El año de nacimiento es:",fila[5])
