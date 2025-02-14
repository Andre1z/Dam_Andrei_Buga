fetch("../back/?tabla=categorias")
    .then(response => response.json())
    .then(datos => {
        console.log(datos); // Debugging: See what data is retrieved
        let cabecera = document.querySelector("header nav ul");
        let plantilla = document.querySelector("#elementomenu");
        let columna = document.querySelector(".columna");

        // Mapping of category names to their respective URLs
        const categoryUrls = {
            "Store": "../front/modulos/tienda/tienda.php",
            "Mac": "../front/modulos/mac/mac.php",
            "iPad": "../front/modulos/ipad/ipad.php",
            "iPhone": "../front/modulos/iphone/iphone.php",
            "Watch": "../front/modulos/watch/watch.php",
            "Vision": "../front/modulos/vision/vision.php",
            "AirPods": "../front/modulos/airpods/airpods.php",
            "TV & Home Entertainment": "../front/modulos/tv-home-entertainment/tv-home-entertainment.php",
            "Accessories": "../front/modulos/accessories/accessories.php",
            "Support": "../front/modulos/support/support.php"
        };

        datos.forEach(dato => {
            let instancia = plantilla.content.cloneNode(true);
            let enlace = instancia.querySelector("a");

            enlace.textContent = dato.nombre;
            enlace.dataset.descripcion = dato.descripcion; // Store extra info
            enlace.dataset.imagen = dato.imagen; // Store image (if exists)

            // Set the href attribute based on the category name
            if (categoryUrls[dato.nombre]) {
                enlace.href = categoryUrls[dato.nombre];
            } else {
                enlace.href = "#"; // Default to "#" if no URL is found
            }

            enlace.addEventListener("mouseenter", function () {
                columna.innerHTML = `
                    <h2>${dato.nombre}</h2>
                    <p>${dato.descripcion || "No description available."}</p>
                    ${dato.imagen ? `<img src="${dato.imagen}" alt="${dato.nombre}" style="max-width: 100%;">` : ""}
                `;
            });

            cabecera.appendChild(instancia);
        });
    })
    .catch(error => console.error("Error fetching categories:", error));
