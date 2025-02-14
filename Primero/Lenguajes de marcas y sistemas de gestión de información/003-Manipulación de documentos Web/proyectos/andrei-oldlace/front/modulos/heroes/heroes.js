fetch("../back/?tabla=heroes")
.then(function(response){
    return response.json()
})
.then(function(datos){
    console.log(datos)
    let contenedorheroes = document.querySelector("#heroes")
    let plantillaheroe = document.querySelector("#plantillaheroe")
    datos.forEach(function(dato){
        let instancia = plantillaheroe.content.cloneNode(true);
        instancia.querySelector("h3").textContent = dato.titulo
        instancia.querySelector("h4").textContent = dato.texto
        instancia.querySelector("article").style.background = "url(data:image/png;base64,"+dato.imagen+")"
        contenedorheroes.appendChild(instancia)
    })
})