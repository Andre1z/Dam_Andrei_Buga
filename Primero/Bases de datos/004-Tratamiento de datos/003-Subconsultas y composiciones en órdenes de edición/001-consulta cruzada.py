import mysql.connector

connection = mysql.connector.connect(
    host='localhost',
    user='miempresa',
    password='miempresa',
    database='miempresa'
)

cursor = connection.cursor(dictionary = True)

while True:
    print("Programa de gestion de clientes")
    print("1.-Insertar un cliente:")
    print("2.-Listado de todos los clientes:")
    print("3.-...")
    opcion = input("Selecciona una opcion: "+opcion)

    if opcion == "1"
    print("Vamos a insertar un cliente")
    nombre = input("Introduce un nombre: ")
    apellidos = input("Introduce los apellidos: ")
    email = input("Introduce un email: ")
    ciudad = input("Introduce una ciudad: ")
    fecha_nacimiento = input("Introduce una fecha de nacimiento: ")
