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
