// JavaScript para manejar el clic en los botones de "Leer más"
document.querySelectorAll(".leer-mas").forEach(function(button) {
    button.addEventListener("click", function () {
        var sectionContainer = button.closest(".info-section-nuevo");
        sectionContainer.querySelector(".contenidoAdicional").style.display = "block";
        button.style.display = "none";
        sectionContainer.querySelector(".ocultar-texto").style.display = "inline-block";
    });
});

// JavaScript para manejar el clic en los botones de "Ocultar texto"
document.querySelectorAll(".ocultar-texto").forEach(function(button) {
    button.addEventListener("click", function () {
        var sectionContainer = button.closest(".info-section-nuevo");
        sectionContainer.querySelector(".contenidoAdicional").style.display = "none";
        sectionContainer.querySelector(".leer-mas").style.display = "inline-block";
        button.style.display = "none";
    });
});


// tarjetas negro spiritual personas"
document.querySelectorAll('.btn-primary').forEach(button => {
    button.addEventListener('click', () => {
        const persona = button.getAttribute('data-persona');
        const modalContent = document.getElementById('modal-content');
        // Simulamos que cargamos información diferente para cada persona
        modalContent.textContent = `Información detallada de Persona ${persona}.`;
    });
});


/*
* FUNCION PARA AMPLIAR LAS IMAGENES
*/

// Asignamos el evento click a todas las imágenes
let images = document.querySelectorAll('.lightbox-gallery img');

images.forEach(img => {
    img.addEventListener('click', (e) => {
    let urlImagen = e.target.src;
    console.log('URL de la imagen:', urlImagen); // Verifica la URL
    mostrarImagen(urlImagen);
    });
});

//Muesta la imagen completa en la galeria
function mostrarImagen(UrlImagen) {
    let imagenAmpliada = document.querySelector('.imagen-ampliada');
    let imagenAmpliadaContent = document.querySelector('.imagen-ampliada-content');
    let imagenThumbnail = document.querySelector('.img');
    let body = document.querySelector("body");

    console.log('URL de la imagen:', UrlImagen);  // Verifica la URL en la consola

      // Verifica si el elemento de la imagen se encontró
    if (imagenAmpliadaContent) {
        imagenAmpliadaContent.src = UrlImagen;
        console.log('Imagen SRC asignado:', imagenAmpliadaContent.src); // Confirma que se asignó
    } else {
        console.error('No se encontró el elemento .imagen-ampliada-content');
    }

    imagenAmpliada.style.display = 'block';
    imagenAmpliadaContent.src = UrlImagen;
    body.style.overflow="hidden";
}

function cerrarImagenAmpliada() {
    let body = document.querySelector("body");

    let imagenAmpliada = document.querySelector('.imagen-ampliada');
    imagenAmpliada.style.display = 'none';
    body.style.overflow="auto";
}


