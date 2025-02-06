# Estructura del Proyecto

- **🗀  007-QR Code/**
    - 🗋  001-QRCODE.py
    - 🗋  fondo.jpg
    - 🗋  Guia.md
    - 🗋  index.html

# Documentación de Archivos


# Código de Archivos

## 001-QRCODE.py

```python
from flask import Flask, render_template, request, send_file
from flask_cors import CORS
import qrcode
from io import BytesIO

app = Flask(__name__, template_folder="templates", static_folder="static")
CORS(app)  # Enable CORS for all routes

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/generate_qr', methods=['POST'])
def generate_qr():
    url = request.form.get('url')
    if not url:
        return "URL is required", 400

    qr = qrcode.QRCode(
        version=1,
        error_correction=qrcode.constants.ERROR_CORRECT_L,
        box_size=10,
        border=4,
    )
    qr.add_data(url)
    qr.make(fit=True)
    img = qr.make_image(fill_color="black", back_color="white")

    img_io = BytesIO()
    img.save(img_io, 'PNG')
    img_io.seek(0)

    return send_file(img_io, mimetype='image/png')

if __name__ == '__main__':
    app.run(debug=True)

```

## Guia.md

```
# Estructura del Proyecto

- **🗀  007-QR Code/**
    - 🗋  001-QRCODE.py
    - 🗋  fondo.jpg
    - 🗋  Guia.md
    - 🗋  index.html

# Documentación de Archivos


```

## index.html

```html
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QR Code Generator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 20px;
	    background-image:url('fondo.jpg');
            background-size: cover; /* Makes the image cover the whole page */
            background-position: center; /* Centers the image */
            background-repeat: no-repeat; /* Prevents image repetition */
            height: 100vh;
        }
        input {
            width: 300px;
            padding: 10px;
            margin: 10px;
        }
        button {
            padding: 10px 20px;
            background-color: blue;
            color: white;
            border: none;
            cursor: pointer;
        }
        button:hover {
            background-color: darkblue;
        }
        img {
            margin-top: 20px;
            width: 200px;
            height: 200px;
        }
    </style>
</head>
<body>

    <h2>QR Code Generator</h2>
    <input type="text" id="url" placeholder="Enter URL here">
    <br>
    <button onclick="generateQR()">Generate QR Code</button>
    <br>
    <img id="qrImage" style="display: none;">

    <script>
        function generateQR() {
            const url = document.getElementById("url").value;
            if (!url) {
                alert("Please enter a URL");
                return;
            }
            
            fetch("http://127.0.0.1:5000/generate_qr", {
    method: "POST",
    body: new URLSearchParams({ "url": url }),
    headers: { "Content-Type": "application/x-www-form-urlencoded" }
})
            .then(response => response.blob())
            .then(blob => {
                const imgElement = document.getElementById("qrImage");
                imgElement.src = URL.createObjectURL(blob);
                imgElement.style.display = "block";
            })
            .catch(error => console.error("Error generating QR:", error));
        }
    </script>

</body>
</html>

```

