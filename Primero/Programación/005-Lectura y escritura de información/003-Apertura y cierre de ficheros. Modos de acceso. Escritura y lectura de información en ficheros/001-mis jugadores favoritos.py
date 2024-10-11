print("Mis jugadores favoritos, v 1")
while True:
    jugador = input("Introduce el nombre del jugador :")
    anio = input("Introduce el año que tiene el jugador :")

    archivo = open("misjugadoresfavoritos.txt",'a')

    archivo.write(jugador+"|"+anio+"\n")

    archivo.close()
