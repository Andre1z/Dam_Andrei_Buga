fetch("../back/?tabla=destacados")
.then(function(response){
    return response.json()
})
.then(function(datos){
    console.log(datos)
    let contenedordestacados = document.querySelector("#destacados")
    let plantilladestacado = document.querySelector("#plantilladestacado")
    datos.forEach(function(dato){
        let instancia = plantilladestacado.content.cloneNode(true);
        instancia.querySelector("h3").textContent = dato.titulo
        instancia.querySelector("h4").textContent = dato.texto
        instancia.querySelector("article").style.background = "url(data:image/png;base64,"+dato.imagen+")"
        contenedordestacados.appendChild(instancia)
    })
})