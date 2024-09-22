print("Programa calculadora v0.1 por Jose Vicente Carratalá")

operando1 = input("Introduce el primer opernado: ")
operando2 = input("Introduce el segundo opernado: ")
operador = input("Introduce el operador (+,-,*,/)")

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
