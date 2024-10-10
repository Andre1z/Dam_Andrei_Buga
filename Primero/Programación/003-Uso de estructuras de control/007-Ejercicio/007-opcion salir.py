'''
    Programa agenda
    (c) 2024 Jose Vicente Carratalá
'''
# Bienvenida #################################################

TITULO = "Programa agenda"
AUTOR = "Jose Vicente Carratalá"
print(TITULO,"por",AUTOR)

# Estructura de control de ejecución infinita ################

while(True):

    # Menu principal #############################################

    print("Escoge una opción")
    print("1.-Insertar")
    print("2.-Listar")
    print("3.-Actualizar")
    print("4.-Eliminar")
    print("5.-Salir del programa")

    # El usuario debe escoger una opción de estas 5

    opcion = input("Por favor seleccione una opción (1-5):")
    print("Usted a seleccionado la opción número:",opcion)

    #### Selecciono la operación a realizar #######################################

    if opcion == "1":
        print("Procedemos a registrar un nuevo cliente")
    elif opcion == "2":
        print("Procedemos a leer los clientes")
    elif opcion == "3":
        print("Procedemos a actualizar un cliente")
    elif opcion == "4":
        print("Procedemos a eliminar un cliente")
        print("Vamos a eliminar un cliente")
    elif opcion == "5":
        print("Salimos")
        exit()
