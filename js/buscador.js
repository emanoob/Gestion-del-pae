document.getElementById("buscadorForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let texto = document.getElementById("busqueda").value.toLowerCase().trim();

    if (texto === "rutas" || texto === "entregas") {
        window.location.href = "/html/rutentrega.html";
    }

    else if (texto === "inicio") {
        window.location.href = "/index.html";
    }

    else if (texto === "servicios") {
        window.location.href = "/html/servicioCliente.html";
    }

    else if (texto === "acceder") {
        window.location.href = "/html/pagina4.html";
    }

    else if (texto === "login" || texto === "iniciar sesion") {
        window.location.href = "/html/iniciarSesion.html";
    }

    else {
        alert("No se encontró ningún resultado");
    }
});