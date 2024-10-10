print("Programa calculadora v1 creado por Andrei Buga")

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
