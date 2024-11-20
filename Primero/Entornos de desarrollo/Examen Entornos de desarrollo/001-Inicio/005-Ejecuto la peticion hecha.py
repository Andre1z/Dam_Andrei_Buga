import mysql.connector

server = 'localhost'
username = 'capitulos'
password = 'capitulos'
db = 'examen_capitulos'


conection = mysql.connector.connect(
    host=server,
    database=db,
    user=username,
    password=password
)

pettion = 'SELECT * FROM capitulos;'

cursor = conection.cursor()

cursor.execute(pettion)
filas = cursor.fetchall()
