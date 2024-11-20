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
print("1.- Create a register")
print("2.- Read all the registers")
print("3.- Update a register")
print("4.- Delete a register")
'''pettion = 'SELECT * FROM capitulos;'                    # Hago una peticion para que me muestro todo lo que hay en la tabla capitulos

cursor = conection.cursor()

cursor.execute(pettion)
rows = cursor.fetchall()

for row in rows:
    #print(row)
    print("##############################################")
    print("The identifier is: ",row[0])
    print("The chapter number is: ",row[1])
    print("The chapter name is: ",row[2])
    print("The description is: ",row[3])
    print("The know more is: ",row[4])
    print("The image is: ",row[5])'''
