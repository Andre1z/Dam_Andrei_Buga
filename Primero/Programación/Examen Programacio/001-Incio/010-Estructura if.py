import mysql.connector                                  # Importo la libreria mysql

server = 'localhost'                                    # Defino cual es el nombre del servidor
username = 'capitulos'                                  # Defino cual es el nombre de usuario
password = 'capitulos'                                  # Defino cual es la contraseña del usuario
db = 'examen_capitulos'                                 # Defino cual es el nombre de la base de datos


conection = mysql.connector.connect(                    # Me conecto a la base de datos
    host=server,                                        # Le indico el nombre del servidor
    database=db,                                        # Le indico el nombre de la base de datos
    user=username,                                      # Le indico cual es el nombre de usuario
    password=password                                   # Le indico cual es la contraseña
)

'''
    Programa CRUD hecho por Andrei Buga
'''
print("Select one option")
print("1.- Create a chapter")
print("2.- Read all the chapters")
print("3.- Update a chapter")
print("4.- Delete a chapter")

option = input("Select one of this options: ")

if option == "1":
    print("Let's create a new chapter")
    numero_capitulo = input("Insert the chapter number: ")
    nombre_capitulo = input("Insert the chapter name: ")
    descripcion = input("Insert the description: ")
    saber_mas = input("Insert the know more: ")
    imagen = input("Insert the image: ")
    petition = "INSERT INTO capitulos VALUES (NULL,'"+numero_capitulo+"','"+nombre_capitulo+"','"+descripcion+"','"+saber_mas+"','"+imagen+"');"
    cursor = conection.cursor()
    cursor.execute(petition)
    conection.commit()
elif option =="2":
    print("Let's read all the chapters")
    petition = 'SELECT * FROM capitulos;'                    # Hago una peticion para que me muestro todo lo que hay en la tabla capitulos
    cursor = conection.cursor()

    cursor.execute(petition)
    rows = cursor.fetchall()

    for row in rows:
        #print(row)
        print("##############################################")
        print("The identifier is: ",row[0])
        print("The chapter number is: ",row[1])
        print("The chapter name is: ",row[2])
        print("The description is: ",row[3])
        print("The know more is: ",row[4])
        print("The image is: ",row[5])
        input("Press any key to continue...")
elif option == "3":
    print("Let's update a chapter")
    Identificador = input("Insert the id number of the chapter to update: ")
    numero_capitulo = input("Insert the new chapter number: ")
    nombre_capitulo = input("Insert the new chapter name: ")
    descripcion = input("Insert the new description: ")
    saber_mas = input("Insert the new know more: ")
    imagen = input("Insert the new image: ")
    petition = """
        UPDATE capitulos
        SET
        numero_capitulo = '"""+numero_capitulo+"""',
        nombre_capitulo = '"""+nombre_capitulo+"""',
        descripcion = '"""+descripcion+"""',
        saber_mas = '"""+saber_mas+"""',
        imagen = '"""+imagen+"""'
        WHERE Identificador = """+Identificador+"""
    ;"""
    cursor = conection.cursor()
    cursor.execute(petition)
    conection.commit()
elif option == "4":
    print("Let's remove a chapter")
    Identificador = input("Insert the id number of the chapter to delete: ")
    try:
        petition = """
                DELETE FROM capitulos
                WHERE Identificador = """+Identificador+"""
            ;"""
        cursor = conection.cursor()
        cursor.execute(petition)
        conection.commit()
    except:
        print("The Operation couldn't be executated because an issue in the database")
