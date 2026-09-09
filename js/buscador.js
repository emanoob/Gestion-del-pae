document.getElementById("buscadorForm").addEventListener("submit", function(e) {
    e.preventDefault();

    let texto = document.getElementById("busqueda").value.toLowerCase().trim();

    if (texto === "rutas" || texto === "entregas" || texto === "ruta" || texto === "entrega" || texto === "transporte" || texto === "distribucion" || texto === "logistica") {
        window.location.href = "../html/rutentrega.php";
    }

    else if (texto === "inicio" || texto === "principal" || texto === "home" || texto === "pagina principal" || texto === "gestion alimentaria") {
        window.location.href = "../index.php";
    }

    else if (texto === "servicios" || texto === "atencion" || texto === "servicio" || texto === "ayuda" || texto === "soporte" || texto === "contacto" || texto === "cliente") {
        window.location.href = "../html/servicioCliente.php";
    }

    else if (texto === "acceder" || texto === "registro" || texto === "registrarse" || texto === "solicitud" || texto === "solicitar" || texto === "formulario" || texto === "inscripcion" ) {
        window.location.href = "../html/pagina4.php";
    }

    else if (texto === "login" || texto === "iniciar sesion" || texto === "sesion" || texto === "entrar" || texto === "acceso" || texto === "usuario") {
        window.location.href = "../html/iniciarSesion.php";
    }
    
     else if (texto === "datos registrados" || texto === "datos" || texto === "registros" || texto === "entrada" ) {
        window.location.href = "/html/app/app.php";
    }
    

    else {
        alert("No se encontró ningún resultado");
    }
});