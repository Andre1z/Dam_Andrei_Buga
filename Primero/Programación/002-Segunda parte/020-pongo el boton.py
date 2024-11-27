import tkinter as tk

window = tk.Tk()
window.geometry("450x450")
window.title("Programa Calculadora Examen")

operator1 = tk.IntVar()
operator2 = tk.IntVar()
operator3 = tk.IntVar()

def calcula():
    global etiquetaresult
    print("Vamos a calcular")
    op1 = operator1.get()
    op2 = operator2.get()
    op3 = operator3.get()
    calculo = ((op1/op2*100)-op1)+((op1/op3*100)+op1)

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
tk.Button(
    window,
    text="¡Calcula!",
    command=calcula
    ).pack(
        padx=10,
        pady=10
        )

window.mainloop()
