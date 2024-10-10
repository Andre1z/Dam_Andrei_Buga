class Camello:
    def __init__(self):
        self.joroba = None
        self.vida = None
        self.peso = None
    def ronquido(self,numero):
        cadena = "aaaaaaaaaaaaaaa "*numero
        print(cadena)
    def pisoton(self):
        print("Chof Chof")


camello1 = Camello()
print("El nombre del camello1 es ",camello1.nombre)
camello1.nombre = "Mustafa"
print("El nombre del camello1 es ",camello1.nombre)

