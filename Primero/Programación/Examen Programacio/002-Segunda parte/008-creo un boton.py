import tkinter as tk

window = tk.Tk()
window.geometry("450x450")
window.title("Programa Tkinter por Andrei Buga")

tk.Label(window, text="Calculadora Examen").pack(padx=20,pady=20)

tk.Entry(window).pack(padx=20,pady=20)

tk.Button(window, text="¡Calcula!").pack(padx=20,pady=20)

window.mainloop()
