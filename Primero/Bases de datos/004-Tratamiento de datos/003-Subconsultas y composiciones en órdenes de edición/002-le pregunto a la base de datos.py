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
    opcion = input("Selecciona una opcion: ")
    print("La opcion escogida es: "+opcion)

    if opcion == "1":
        print("Vamos a insertar un cliente")
        cursor.execute('SHOW COLUMNS IN clientes')
        filas = cursor.fetchall()
        columnas = []
        valores = []
        for fila in filas:
            if fila['Key'] != "PRI":
                columnas.append(fila['Field'])
                valores.append(input("Introduce el valor para el campo "+fila['Field']+": "))
        peticion = "INSERT INTO clientes ("
        for columna in columnas:
            peticion += columna+","
        peticion += ") VALUES ("
        for valor in valores:
            peticion += valor+","
        peticion += ")"
        print(peticion)
        cursor.execute(peticion)
        connection.commit()

    elif opcion == "2":
        print('Vamos a listar a todos los clientes')
