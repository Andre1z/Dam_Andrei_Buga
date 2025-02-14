fetch("../back/?tabla=oferta")
.then(function(response){
    return response.json()
})
.then(function(datos){
    let texto = document.querySelector("#oferta p")
    texto.textContent = datos[0].texto
})