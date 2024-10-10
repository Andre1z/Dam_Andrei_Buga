'''
    Programa calculadora multifunción
    (c) 2024 Andrei Buga
    Este programa está creado en Python 3
'''

# Introducción / presentación
NOMBRE_DEL_PROGRAMA = "Programa calculadora"
VERSION = "1"
CREADOR = "Andrei Buga"
print(NOMBRE_DEL_PROGRAMA,VERSION,CREADOR)

# Toma de datos

operando1 = input("Introduce el primer operando: ")
operando2 = input("Introduce el segundo operando: ")
operador = input("Introduce el operador (+,-,*,/): ")

# Conversiones de tipo

operando1 = int(operando1)
operando2 = int(operando2)

# Toma de decisiones y realización de cálculos

if operador == "+":
    resultado = operando1 + operando2
elif operador == "-":
    resultado = operando1 - operando2
elif operador == "*":
    resultado = operando1 * operando2
elif operador == "/":
    resultado = operando1 / operando2

# Ofrecer resultados

print("El resultado de la operación es: ",resultado)
