import tkinter as tk

window = tk.Tk()
window.geometry("900x900")
window.title("Programa Calculadora Examen")

operator1 = tk.IntVar()
operator2 = tk.IntVar()
operator3 = tk.IntVar()

def Etiquetaresult1():
    etiquetaresult1.config(text=str(calculo_irpf))
def Etiquetaresult2():
    etiquetaresult2.config(text=str(calculo_iva))
def Etiquetaresult3():
    etiquetaresult3.config(text=str(calculo_total))
def calcula():
    global Etiquetaresult1
    print("Vamos a calcular")
    op1 = int(operator1.get())
    op2 = int(operator2.get())
    op3 = int(operator3.get())
    calculo_irpf = (op1*op2/100)
    calculo_iva = (op1*op3/100)
    calculo_total = (op1-calculo_irpf+calculo_iva)

tk.Label(
    window,
    text="Insert the first operator"
    ).pack(
    padx=20,
    pady=20
    )
tk.Entry(
    window,
    text="Insert the first operator"
    ).pack(
        padx=20,
        pady=20
        )
tk.Label(
    window,
    text="Insert the second operator"
    ).pack(
    padx=20,
    pady=20
    )
tk.Entry(
    window,
    text="Insert the second operator"
    ).pack(
        padx=20,
        pady=20
        )
tk.Label(
    window,
    text="Insert the third operator"
    ).pack(
    padx=20,
    pady=20
    )
tk.Entry(
    window,
    text="insert the third operator"
    ).pack(
        padx=20,
        pady=20
        )
tk.Button(
    window,
    text="¡Calcula!",
    command=calcula
    ).pack(
        padx=20,
        pady=20
        )

tk.Label(
    window,
    text="Este es el calculo del IRPF"
    ).pack(
        padx=20,
        pady=20
        )

Etiquetaresult1 = tk.Label(
    window,
    text=Etiquetaresult1
)
tk.Label(
    window,
    text="Este es el calculo del IVA"
    ).pack(
        padx=20,
        pady=20
        )

Etiquetaresult2 = tk.Label(
    window,
    text=Etiquetaresult2
)
tk.Label(
    window,
    text="Este es el calculo total"
    ).pack(
        padx=20,
        pady=20
        )

Etiquetaresult3 = tk.Label(
    window,
    text=Etiquetaresult3
)
window.mainloop()
