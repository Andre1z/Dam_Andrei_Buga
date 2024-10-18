#################### DOCSTRING ###############################################################################
'''
    Programa CRUD completo
    v2 Andrei Buga
    Este programa sirve para construir CRUD para MySQL
'''
#################### CONECTAR CON BASE LA BASE DE DATOS ######################################################
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
#################### BIENVENIDA ############################################################################
print("############################")                                       
print("Programa CRUD para clientes")
print("############################")
#################### ENTRADA EN EL BUCLE ###################################################################
while True:                                                                 
        
    print("Selecciona una opción")                                          
    print("1.-Crear nuevo cliente")
    print("2.-Leer clientes existentes")
    print("3.-Actualizar cliente existente")
    print("4.-Eliminar cliente")
    print("5.-Salir del programa")

    opcion = input("Selecciona una de las opciones:")                       
    print("Has seleccionado la opcion:",opcion)                             
#################### CREATE REGISTER ######################################################################
    if opcion == "1":                                                       
        
        print("Vamos a insertar un nuevo cliente")                                      
        nombre = input("Introduce un nuevo nombre:")                        
        apellidos = input("Introduce los nuevos apellidos:")                
        email = input("Introduce el email:")                                
        ciudad = input("Introduce la poblacion:")                        
        fecha_nacimiento = input("Introduce la fecha de nacimiento:")      
        peticion = "INSERT INTO clientes VALUES (NULL,'"+nombre+"','"+apellidos+"','"+email+"','"+ciudad+"','"+fecha_nacimiento+"');" 
        cursor = conexion.cursor()                                          
        cursor.execute(peticion)                                            
        conexion.commit()
        input("Registro creado correctamente, por favor pulsa una tecla para continuar...")
#################### READ REGISTER #######################################################################
    elif opcion == "2":                                                     

        print("vamos a listar los clientes")
        peticion = "SELECT * FROM clientes;"                                
        cursor = conexion.cursor()                                          
        cursor.execute(peticion)                                            
        filas = cursor.fetchall()                                           
        for fila in filas:                                                  
            #print(fila)                                                    
            print("########################")                               
            print("El identificador es:",fila[0])                           
            print("El nombre es:",fila[1])
            print("El apellido es:",fila[2])
            print("El email es:",fila[3])
            print("La localidad es:",fila[4])
            print("La fecha de nacimiento es:",fila[5])
        input("Registro listado correctamente, por favor pulsa una tecla para continuar...")
#################### UPDATE REGISTER ######################################################################            
    elif opcion == "3":
        
        print("Vamos a actualizar a un cliente")
        identificador = input("Introduce el id del cliente que vas a actualizar") 
        nombre = input("Introduce un nuevo nombre:")                        
        apellidos = input("Introduce los nuevos apellidos:")                
        email = input("Introduce el email:")                                
        ciudad = input("Introduce la ciudad:")                        
        fecha_nacimiento = input("Introduce la fecha de nacimiento:")      
        peticion = """
                UPDATE clientes
                SET
                nombre = '"""+nombre+"""',
                apellidos = '"""+apellidos+"""',
                email = '"""+email+"""',
                ciudad = '"""+ciudad+"""',
                fecha_nacimiento = '"""+fecha_nacimiento+"""'
                WHERE Identificador = """+identificador+"""
            ;""" 
        cursor = conexion.cursor()                                          
        cursor.execute(peticion)                                            
        conexion.commit()
        input("Registro actualizado correctamente, por favor pulsa una tecla para continuar...")
#################### ÚLTIMO PASO, PROCESAR LA PETICIÓN ####################################################
#################### DELETE REGISTER ######################################################################                    
    elif opcion == "4":
        
        print("Vamos a eliminar a un cliente")
        identificador = input("Introduce el id del cliente que vas a eliminar") 
        try:
            peticion = """
                    DELETE FROM clientes
                    WHERE Identificador = """+identificador+"""
                ;"""                                                            
            cursor = conexion.cursor()                                          
            cursor.execute(peticion)                                            
            conexion.commit()
            input("Registro eliminado correctamente, por favor pulsa una tecla para continuar...")
        except:
            print("La operación no se ha podido realizar por algun error en la base de datos")
#################### CERRAR EL PROGRAMA ##################################################################                   
    elif opcion == "5":
        exit()
    else:
        print("Lo que has escogido no es una opción válida")
        
