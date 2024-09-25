from flask import Flask

app = Flask(__name__)

@app.route('/')
def inicio():
    contenido = '<p>Esta es la página de inicio</p>'
    return cabecera+contenido

app.run(debug=True)

mensaje = {"resultado":"ok"}
print(mensaje)
