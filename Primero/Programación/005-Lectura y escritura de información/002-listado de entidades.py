import mysql.connector

connection = mysql.connector.connect(
    host='localhost',
    user='miempresa',
    password='miempresa',
    database='miempresa'
)

cursor = connection.cursor()

print("Programa de gestion de miempresa v1")
print("Por Andrei Buga")

print("Selecciona una tabla de la base de datos (miempresa)")

peticion = "SHOW TABLES;"


cursor.execute(peticion)
filas = cursor.fetchall()
tablas = []
for fila in filas:
    tablas.append(fila[0])
contador = 0
for tabla in tablas:
    print(contador,"-",tabla)
    contador+=1
opcion = input("Selecciona una opcion: ")

print("Vamos a trabajar con la tabla/entidad: ",tablas[int(opcion)])
peticion = "SELECT * FROM "+tablas[int(opcion)]
print("La peticion que voy a tirar contra la base de datos es: "+peticion)

print("1.-Introduce un nuevo "+tablas[int(opcion)]+":")
print("2.-Listar "+tablas[int(opcion)]+":")
print("3.-Actualizar "+tablas[int(opcion)]+":")
print("4.-Eliminar "+tablas[int(opcion)]+":")

opcion2 = input("Selecciona una opcion: ")

if opcion2 =="1":
    print("Vamos a insertar ",tablas[int(opcion)])
elif opcion2 =="2":
    print("Vamos a listar ",tablas[int(opcion)])
    peticion = "SELECT * FROM "+tablas[int(opcion)]
    cursor.execute(peticion)
    filas = cursor.fetchall()
    for fila in filas:
        print(fila)
elif opcion2 =="3":
    print("Vamos a actualizar ",tablas[int(opcion)])
elif opcion2 =="4":
    print("Vamos a eliminar ",tablas[int(opcion)])
