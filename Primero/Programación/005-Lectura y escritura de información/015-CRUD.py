import sqlite3                                          # Importo la libreria de conexion a base de datos

conexion = sqlite3.connect('empresa.db')                # Abro una base de datos existente o la creo si no existe

cursor = conexion.cursor()                              # Creo un cursor dentro de la base de datos

cursor.execute('''
    CREATE TABLE
    IF NOT EXISTS clientes
    (
        Identificador INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre TEXT,
        apellidos TEXT,
        email TEXT,
        direccion TEXT
    );
''')

cursor.execute('''
    INSERT INTO clientes
    VALUES (
        NULL,
        'Andrei',
        'Buga',
        'bugaandrei1@gmail.com',
        'Avenida del Cid'
        );
''')

conexion.commit()

cursor.execute('''
   SELECT * FROM clientes
''')
filas = cursor.fetchall()

for fila in filas:
    print(fila)

cursor.execute('''
    UPDATES clientes
    SET apellidos = 'Garcia Martinez'
    WHERE Identificador = 1;
''')
conexion.commit()

cursor.execute('''
    DELETE FORM clientes
    WHERE Identificador = 1;
''')
conexion.commit()

conexion.close()
