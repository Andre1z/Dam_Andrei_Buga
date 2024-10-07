#1. Estructura de un programa informático
#edad = input("Dime la edad actual que tienes: ")
#print("Tu edad es de",edad,"años")
x = 5
#print("Tu edad es de",edad,"años")
y = 9
#print("Tu edad es de",edad,"años")
#suma = x + y
#resta = x - y
#multiplicacion = x * y
#division = x / y
#modulo = x % y
#potencia = x ** y
#print(suma, resta, multiplicacion, division, modulo, potencia)

print(x == y)
print(x != y)
print(x > y)
print(x < y)
print(x >= y)
print(x <= y)

a = True
b = False

print(a and b)
print(a or b)
print(not a)

#edad = 18
#if edad < 18:
    #print("Eres menor de edad")
#elif edad == 18:
   # print("Enhorabuena, ya tienes 18 años")
#else:
 #   print("Eres mayor de edad")

mobiles = ["Samsung", "iPhone", "Xiaomi", "Asus"]

for mobil in mobiles:
    print(mobil)

contador = 0

while contador < 5:
    print("Contador:",contador)
    contador += 1

def saludar():
    return "¡Hola, mundo!"

mensaje = saludar()
print(mensaje)

def suma(a, b):
    return a+b

resultado = suma(3, 5)
print(resultado)


def saludar(nombre="Andrei"):
    return f"¡Hola, {nombre}!"

print(saludar())
print(saludar("Ana"))

def operaciones(a, b):
    suma = a + b
    resta = a - b
    multiplicacion = a * b
    division = a / b
    return suma, resta, multiplicacion, division

resultado_suma, resultado_resta, resultado_multiplicacion, resultado_division = operaciones(21, 7)
print(f"Suma: {resultado_suma}, Resta: {resultado_resta}, Multiplicación: {resultado_multiplicacion}, Division: {resultado_division}")


class Persona:
    def __init__(self, nombre, apellido, edad):
        self.nombre = nombre
        self.apellido = apellido
        self.edad = edad

    def saludar(self):
        return f"Hola, soy {self.nombre} {self.apellido} y tengo {self.edad} años."
persona1 = Persona("Andrei", "Buga", 18)
print(persona1.saludar())

class Estudiante(Persona):
    def __init__(self, nombre, apellido, edad, carrera):
        super().__init__(nombre, apellido, edad)
        self.carrera = carrera

    def estudiar(self):
        return f"{self.nombre} esta estudiando {self.carrera}."
estudiante1 = Estudiante("Ana", "Perez", 33, "Ingenieria")
print(estudiante1.saludar())
print(estudiante1.estudiar())

edad = 25
salto = 9
print(edad+salto)

numero_flotante = 10.75
numero_entero = int(numero_flotante)
print(numero_entero)

numero_entero1 = 7
numero_flotante1 = float(numero_entero1)
print(numero_flotante1)

entrada = input("Introduce un numero que quieras: ")
numero = int(entrada)
numero2 = 7
numeros = numero+numero2
print(numeros)

#Esto es un comentario
pero esto no lo es
'''
Esto es un comentario
Y esto de aqui tambien lo es
'''
"""
Esto es un comentario
Y esto de aqui tambien lo es
"""
"""
Esto es un comentario
Y esto de aqui tambien lo es
'''
