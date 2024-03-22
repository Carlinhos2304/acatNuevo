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

//Muesta la imagen completa en la galeria
function mostrarImagen(UrlImagen) {
    let imagenAmpliada = document.querySelector('.imagen-ampliada');
    let imagenAmpliadaContent = document.querySelector('.imagen-ampliada-content');
    let imagenThumbnail = document.querySelector('.img');
    let body = document.querySelector("body");

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


