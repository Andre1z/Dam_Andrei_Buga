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
camello1.ronquido(10)
camello1.pisoton()
