'''
    Programa calculadora multifunción
    (c) 2024 Andrei Buga
    Este programa está creado en Python 3
'''

NOMBRE_DEL_PROGRAMA = "Programa calculadora"
VERSION = "1"
CREADOR = "Andrei Buga"
print(NOMBRE_DEL_PROGRAMA,VERSION,CREADOR)

operando1 = input("Introduce el primer operando: ")
operando2 = input("Introduce el segundo operando: ")
operador = input("Introduce el operador (+,-,*,/): ")

operando1 = int(operando1)
operando2 = int(operando2)

if operador == "+":
    resultado = operando1 + operando2
elif operador == "-":
    resultado = operando1 - operando2
elif operador == "*":
    resultado = operando1 * operando2
elif operador == "/":
    resultado = operando1 / operando2

print("El resultado de la operación es: ",resultado)
