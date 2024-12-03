import tkinter as tk

window = tk.Tk()
window.geometry("450x450")
window.title("Programa Tkinter por Andrei Buga")

def doSOMTHING():
    print("Vamos a calcular")
    global parrafo
    parrafo.config("Este texto es un ejemplo que da Python")

parrafo = tk.Label(
    window,
    text="Calculadora Examen"
)
parrafo.pack(padx=20,pady=20)

tk.Entry(window).pack(padx=20,pady=20)

tk.Button(window, text="¡Calcula!",command=doSOMTHING).pack(padx=20,pady=20)

window.mainloop()
