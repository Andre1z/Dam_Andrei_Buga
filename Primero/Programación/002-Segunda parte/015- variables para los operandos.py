import tkinter as tk

window = tk.Tk()
window.geometry("450x450")
window.title("Programa Calculadora Examen")

operator1 = tk.IntVar()
operator2 = tk.IntVar()

def doSOMTHING():
    print("Vamos a calcular")
    content_field = contentfield1.get()
    global parrafo
    parrafo.config(text=content_field)

parrafo = tk.Label(
    window,
    text="Calculadora Examen"
)
parrafo.pack(padx=20,pady=20)

tk.Entry(window).pack(padx=20,pady=20)

tk.Button(window, text="¡Calcula!",command=doSOMTHING).pack(padx=20,pady=20)

window.mainloop()
