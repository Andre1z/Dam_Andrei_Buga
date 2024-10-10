class Camello:
    def __init__(self,nuevonombre,nuevajoroba,nuevopeso,nuevavida):
        self.joroba = nuevajoroba
        self.vida = nuevavida
        self.peso = nuevopeso
        self.nombre = nuevonombre
    def ronquido(self,numero):
        cadena = "aaaaaaaaaaaaaaa "*numero
        print(cadena)
    def pisoton(self):
        print("Chof Chof")


Camello1 = Camello("Mustafa",3,500,100)

print("El nombre del camello es:",Camello1.nombre)
print("La vida del camello es:",Camello1.vida)

