from flask import Flask

app = Flask(__name__)

@app.route('/')
def inicio():
    contenido = '{"resultado":"ok"}'
    return cabecera+contenido

app.run(debug=True)
