//Script básico (todas las páginas lo utilizan)

// Funciones para el botón de "Ir arriba"
var goToTopButton = document.getElementById("goToTop");
goToTopButton.addEventListener("click", goToTopFunction);
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 200 || document.documentElement.scrollTop > 200) {
        goToTopButton = document.getElementById("goToTop");
        goToTopButton.style.display = "block";
    } else {
        goToTopButton.style.display = "none";
    }
}

function goToTopFunction() { // Función que hace scroll top
    document.documentElement.scrollTop = 0;
}



  
