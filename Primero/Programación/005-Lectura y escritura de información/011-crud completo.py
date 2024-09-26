'''
    Programa CRUD completo
    v1.0 Andrei Buga
    El objetivo de este programa es construir el CRUD completo contra MySQL
'''
import mysql.connector
servidor = "localhost"
usuario = "miempresa"
contrasena = "miempresa"
base_de_datos = "miempresa"

conexion = mysql.connector.connect(
    host=servidor,
    database=base_de_datos,
    user=usuario,
    password=contrasena
)

print("#######################################")
print("Programa CRUD completo sobre clientes")
print("#######################################")

while True:
 
    print("Selecciona una opcion")
    print("1.-Insertar nuevo cliente")
    print("2.-Leer clientes existentes")
    print("3.-Actualizar cliente existente")
    print("4.-Eliminar clientes")
    print("5.-Salir de la aplicación")

    opcion = input("Selecciona una de las opciones: ")
    print("Has seleccionado la opcion: ",opcion)

    if opcion == "1":
        print("Vamos a insertar un nuevo cliente")
        nombre = input("Introduce un nuevo nombre: ")
        apellidos = input("Introduce los nuevos apellidos: ")
        email = input("Introduce un nuevo email: ")
        ciudad = input("Introduce una nueva población: ")
        fecha_nacimiento = input("Introduce una nueva fecha de nacimiento: ")
        peticion = "INSERT INTO clientes VALUES (NULL,'"+nombre+"','"+apellidos+"','"+email+"','"+ciudad+"','"+fecha_nacimiento+"');"
        cursor = conexion.cursor()
        cursor.execute(peticion)
        conexion.commit()
    elif opcion == "2":
        print("Vamos a listar los clientes")
        peticion = "SELECT * FROM clientes;"
        cursor = conexion.cursor()
        cursor.execute(peticion)
        filas = cursor.fetcha11()
        for fila in filas:
            print("#######################################")
            print("El identificador es: ",fila[0])
            print("El nombre es: ",fila[1])
            print("El apellido es: ",fila[2])
            print("El email es: ",fila[3])
            print("La ciudad es: ",fila[4])
            print("La fecha de nacimiento es: ",fila[5])
    elif opcion == "3":
        print("Vamos a actualizar a un cliente")
        identificador = input("Introduce el id del cliente que vas a actualizar")
        nombre = input("Introduce un nuevo nombre: ")
        apellidos = input("Introduce los nuevos apellidos: ")
        email = input("Introduce el email: ")
        ciudad = input("Introduce la nueva ciudad: ")
        fecha_nacimiento = input("Introduce la nueva fecha de nacimiento: ")
        peticion = """
                UPDATE clientes
                SET
                nombre = '"""+nombre+"""',
                apelidos = '"""+apellidos+"""',
                email = '"""+email+"""',
                ciudad = '"""+ciudad+"""',
                fecha_nacimiento = '"""+fecha_nacimiento+"""'
                WHERE Identificador = """+identificador+"""
        ;"""
        cursor = conexion.cursor()
        cursor.execute(peticion)
        conexion.commit()
    elif opcion == "4":
        print("Vamos a eliminar un cliente")
        identificador = input("Introduce el id del cliente que vas a eliminar")
        try:
            peticion = """
                    DELETE FROM clientes
                    WHERE Identificador = """+identificador+"""
                ;"""
            cursor = conexion.cursor()
            cursor.execute(peticion)
            conexion.commit()
        except:
            print("La operación no se pudo realizar por un error en la base de datos")
    elif opcion == "5":
        exit()
    else:
        print("La opcion que has elegido no existe")
