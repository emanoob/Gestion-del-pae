document.addEventListener("DOMContentLoaded", function() {
    const formulario = document.getElementById("buscadorForm");

    if (!formulario) return;

    formulario.addEventListener("submit", function(e) {
        e.preventDefault(); // Evita el envío a Apache y el error 404

        let texto = document.getElementById("busqueda").value.toLowerCase().trim();

        // Detecta si estás dentro de la carpeta /html/
        let enSubcarpeta = window.location.pathname.includes("/html/");
        let prefijoHtml = enSubcarpeta ? "" : "html/";
        let rutaInicio = enSubcarpeta ? "../index.php" : "index.php";

        if (["rutas", "entregas", "ruta", "entrega", "transporte", "distribucion", "logistica"].includes(texto)) {
            window.location.href = prefijoHtml + "rutentrega.php";
        }
        else if (["inicio", "principal", "home", "pagina principal", "gestion alimentaria"].includes(texto)) {
            window.location.href = rutaInicio;
        }
        else if (["servicios", "atencion", "servicio", "ayuda", "soporte", "contacto", "cliente"].includes(texto)) {
            window.location.href = prefijoHtml + "servicioCliente.php";
        }
        else if (["acceder", "registro", "registrarse", "solicitud", "solicitar", "formulario", "inscripcion"].includes(texto)) {
            window.location.href = prefijoHtml + "pagina4.php";
        }
        else if (["login", "iniciar sesion", "sesion", "entrar", "acceso", "usuario"].includes(texto)) {
            window.location.href = prefijoHtml + "iniciarSesion.php";
        }
        else if (["datos registrados", "datos", "registros", "entrada"].includes(texto)) {
            window.location.href = prefijoHtml + "app/app.php";
        }
        else {
            alert("No se encontró ningún resultado para: " + texto);
        }
    });
});