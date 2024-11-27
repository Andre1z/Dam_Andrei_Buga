import tkinter as tk

window = tk.Tk()
window.geometry("450x450")
window.title("Programa Calculadora Examen")

operator1 = tk.IntVar()
operator2 = (15)
operator3 = (21)

def calcula():
    global etiquetaresult
    print("Vamos a calcular")
    op1 = operator1.get()
    op2 = operator2
    op3 = operator3
    calculo = op1-op2+op3
    etiqueta.config(text=str(calculo))

tk.Label(
    window,
    text="insert the first operator"
    ).pack(
    padx=20,
    pady=20
    )
tk.Entry(
    window,
    text="insert the first operator"
    ).pack(
        padx=20,
        pady=20
        )

tk.Button(window, text="¡Calcula!",command=doSOMTHING).pack(padx=20,pady=20)

window.mainloop()
