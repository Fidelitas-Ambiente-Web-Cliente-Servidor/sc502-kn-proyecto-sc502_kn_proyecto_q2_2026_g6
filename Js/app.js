
// Proyecto ADNA
// app.js


document.addEventListener("DOMContentLoaded", () => {

    console.log("Sistema ADNA cargado correctamente.");

    mensajeBienvenida();
    activarMenu();
    scrollSuave();
    mostrarFecha();
    animarSecciones();

});


// MENSAJE DE BIENVENIDA


function mensajeBienvenida() {

    alert("Bienvenido al Sistema Web de la Asociación de Desarrollo Integral Nuestro Amo.");

}


// MENÚ ACTIVO


function activarMenu() {

    const enlaces = document.querySelectorAll(".menu a");

    enlaces.forEach(enlace => {

        enlace.addEventListener("click", function () {

            enlaces.forEach(item => item.classList.remove("activo"));

            this.classList.add("activo");

        });

    });

}


// SCROLL SUAVE


function scrollSuave() {

    const enlaces = document.querySelectorAll('a[href^="#"]');

    enlaces.forEach(enlace => {

        enlace.addEventListener("click", function (e) {

            e.preventDefault();

            const destino = document.querySelector(this.getAttribute("href"));

            if (destino) {

                destino.scrollIntoView({

                    behavior: "smooth"

                });

            }

        });

    });

}


// MOSTRAR FECHA ACTUAL


function mostrarFecha() {

    const footer = document.querySelector("footer");

    const fecha = new Date();

    const opciones = {

        weekday: "long",
        year: "numeric",
        month: "long",
        day: "numeric"

    };

    const fechaTexto = fecha.toLocaleDateString("es-CR", opciones);

    const parrafo = document.createElement("p");

    parrafo.innerHTML = "<strong>Fecha:</strong> " + fechaTexto;

    footer.appendChild(parrafo);

}


// ANIMACIÓN DE SECCIONES


function animarSecciones() {

    const secciones = document.querySelectorAll("section");

    const observador = new IntersectionObserver((entradas) => {

        entradas.forEach(entrada => {

            if (entrada.isIntersecting) {

                entrada.target.style.opacity = "1";
                entrada.target.style.transform = "translateY(0px)";

            }

        });

    });

    secciones.forEach(seccion => {

        seccion.style.opacity = "0";
        seccion.style.transform = "translateY(50px)";
        seccion.style.transition = "all 0.8s ease";

        observador.observe(seccion);

    });

}


// BOTÓN LOGIN


const botonLogin = document.querySelector(".btn-login");

if (botonLogin) {

    botonLogin.addEventListener("click", function (e) {

        alert("Redirigiendo al inicio de sesión...");

    });

}