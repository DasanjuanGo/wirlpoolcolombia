/* btn subir*/
document.addEventListener("DOMContentLoaded", function() {
    var btnSubir = document.getElementById("btnSubir");

    window.onscroll = function() {
        mostrarOcultarBoton();
    };

    btnSubir.onclick = function() {
        subirArriba();
    };

    function mostrarOcultarBoton() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            btnSubir.style.display = "block";
        } else {
            btnSubir.style.display = "none";
        }
    }

    function subirArriba() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
});


/* Inicio ----> script carousel de marcas */
const rutasImagenes = [
    'images/BOSCH.jpg',
    'images/CENTRALES_.jpg',
    'images/CHALLENGER_.jpg',
    'images/Electrolux_.png',
    'images/Frigidaire.jpg',
    'images/General Electric.jpg',
    'images/Haceb.png',
    'images/LG.jpg',
    'images/Whirlpool_.jpg',
    'images/panasonic.jpg',
    'images/Samsung_.jpg'

];

const carouselContainer = document.getElementById('carouselContainer');

function iniciarCarrusel() {
    // Agregar imágenes al contenedor
    rutasImagenes.forEach((ruta) => {
        const imagen = document.createElement('img');
        imagen.src = ruta;
        carouselContainer.appendChild(imagen);
    });

    let posicion = 2500; // Posición inicial fuera del límite visible (ajustar según el ancho de las imágenes)
    const velocidad = 2; // Velocidad de desplazamiento en píxeles por fotograma

    function animarDesplazamiento() {
        // Mover todas las imágenes hacia la derecha
        posicion += velocidad;
        carouselContainer.style.transform = `translateX(${posicion}px)`;

        // Verificar si la primera imagen ha pasado el borde derecho
        const primeraImagen = carouselContainer.firstElementChild;
        const anchoImagen = primeraImagen.clientWidth;

        if (posicion >= 1000) {
            // Restablecer la posición para mantener el efecto de emergencia
            carouselContainer.style.transform = `translateX(-${anchoImagen}px)`;
            posicion = -anchoImagen;
            // Mover la primera imagen al final del contenedor
            carouselContainer.appendChild(primeraImagen);
        }

        // Continuar la animación
        requestAnimationFrame(animarDesplazamiento);
    }

    // Iniciar la animación cuando se cargue el contenido
    document.addEventListener('DOMContentLoaded', () => {
        animarDesplazamiento();
    });
}

// Llamar a la función iniciarCarrusel() cuando se cargue el contenido
iniciarCarrusel();

/* Fin ----> script carousel de marcas */
