'''
    Programa agenda con SQLite
    (c) 2024 por Andrei Buga
    v1 Empezando en clase
'''
import sqlite3                                          
conexion = sqlite3.connect('empresa.db')

cursor = conexion.cursor()
while True:
    print("##########################")
    print("      Programa agenda     ")
    print("      por Andrei Buga     ")
    print("##########################")

    print("Menú principal")
    print("1.-Crear un nuevo registro")
    print("2.-Listado de registros")
    print("3.-Actualización de registros")
    print("4.-Eliminación de registros")

    opcion = input("Selecciona una opción: ")

    if opcion == "1":
        print("Procedemos a insertar un nuevo registro")
        
        nombre = input("Introduce un nuevo nombre: ")
        apellidos = input("Introduce nuevos apellidos: ")
        email = input("Introduce un nuevo email: ")
        direccion = input("Introduce una nueva direccion: ")

        cursor.execute(f'''
            INSERT INTO clientes
            VALUES (
                NULL,
                "{nombre}",
                "{apellidos}",
                "{email}",
                "{direccion}"

            );
        ''')
        conexion.commit()
        conexion.close()
    elif opcion == "2":
        print("Vamos a listar los registros")
        cursor.execute('''
           SELECT * FROM clientes
        ''')
        filas = cursor.fetchall()
        for fila in filas:
            print(fila)
    elif opcion == "3":
        print("Vamos a actualizar un registro")

        identificador = input("Indica el registro que quieres actualizar (id): ")

        nombre = input("Introduce un nuevo nombre: ")
        apellidos = input("Introduce los nuevos apellidos: ")
        email = input("Introduce un nuevo email: ")
        direccion = input("Introduce una nueva direccion: ")

        cursor.execute(f'''
            UPDATE clientes
            SET
            nombre = '{nombre}',
            apellidos = '{apellidos}',
            email = '{email}',
            direccion = '{direccion}'
            WHERE Identificador = '{identificador}'
        ''')
        conexion.commit()
        conexion.close()
    elif opcion == "4":
        print("Vamos a eliminar un registro")
        identificador = input("Indica el registro que quieres eliminar (id): ")
        cursor.execute(f'''
                DELETE FROM clientes
                WHERE Identificador = '{identificador}';
        ''')
        conexion.commit()

        conexion.close()
