archivo = open("misjugadoresfavoritos.txt",'r')

lineas = archivo.readlines()

for linea in lineas:
    print(linea)
