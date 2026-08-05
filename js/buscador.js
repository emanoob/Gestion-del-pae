buscador.js
document.getElementById("buscadorForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let texto = document.getElementById("busqueda").ariaValueMax.toLowerCase();

    const paginas = {
        "inicio": "index.html",
        "principal": "index.html",

        "rutas": "html/rutentrega.html",
        "entrega": "html/rutentrega",

        "atencion": "html/servicioCliente",
        "servicios": "html/servicioCliente",
        "Cliente": "html/servicioCliente",

        "acceder": "html/pagina4.html",
        "servicio": "html/pagina4.html",

        "login": "html/iniciarSesion.html",
        "sesion": "html/iniciarSesion.html",
        "iniciar sesion": "html/iniciarSesion.html"
    };
    
    if (paginas[texto]) {
        window.location.href = paginas[texto];
    } else {
        alert("No se encontro ningun resultado.");
    }
});

console.log("buscador cargado")