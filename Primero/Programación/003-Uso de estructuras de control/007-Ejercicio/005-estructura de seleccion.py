'''
    Programa agenda
    (c) 2024 Andrei Buga
'''
# Bienvenida #################

TITULO = "Programa agenda"
CREADOR = "Andrei Buga"
print(TITULO,"por,"CREADOR)

# Menu principal

print("Escoge una opción")
print("1.-Insertar")
print("2.-Listar")
print("3.-Actualizar")
print("4.-Eliminar")

# El usuario debe escoger una opción de estas 4

opcion = input("Por favor seleccione una opción (1-4):")
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
