import tkinter as tk

ventana = tk.Tk()
ventana.geometry("500x500+50+50")
ventana.title("El programa de Andrei Buga")

def ejecutaAlgo():
    print("ok veo que has pulsado el boton")
    global texto
    texto.config("Este texto te lo estoy escribiendo desde Python")

texto = tk.Label(
    ventana,
    text="Hola a todos este es mi primer programa."
    )
texto.pack(padx=10,pady=10)

tk.Entry(ventana).pack(padx=10,pady=10)

tk.Button(ventana, text="Pulsame si te atreves",command=ejecutaAlgo).pack(padx=10,pady=10)

ventana.mainloop()
