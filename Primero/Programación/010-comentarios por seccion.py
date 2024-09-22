'''
    Programa fenomenal
    (c) 2024 Jose Vicente Carratalá
    y esta es otra linea y no pasa nada
'''

# Introducción / presentación
NOMBRE_DEL_PROGRAMA = "Programa calculadora"
VERSION = "0.1"
AUTOR = "Jose Vicente Carratalá"
print(NOMBRE_DEL_PROGRAMA,VERSION,AUTOR)

# Tima de datos

operando1 = input("Introduce el primer opernado: ")
operando2 = input("Introduce el segundo opernado: ")
operador = input("Introduce el operador (+,-,*,/)")

# Conversiones de tipo

operando1 = int(operando1)
operando2 = int(operando2)

# Toma de decisiones y realización de datos

if operador == "+":
    resultado = operando1 + operando2
elif operador == "-":
    resultado = operando1 - operando2
elif operador == "*":
    resultado = operando1 * operando2
elif operador == "/":
    resultado = operando1 / operando2

print("El resultado de la operación es: ",resultado)
