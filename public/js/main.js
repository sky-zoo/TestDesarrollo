let menu = document.getElementById("menu");
let menuDesplegable = document.getElementById("menuDesplegable");
let botonMenu = document.getElementById("botonMenu");
let fondoMenu = document.getElementById("fondoMenu");

let alturaFondoMenu = fondoMenu.offsetHeight;

let alturaMenu = menu.offsetHeight; //Altura del menu desplegable
let alturaVentana = window.innerHeight; //Altura de la ventana del navegador
let alturaDisponible = alturaVentana-alturaMenu; //Altura disponible entre el menu desplegable y la barra de navegacion

// menuDesplegable.style.height = alturaDisponible + 'px';
fondoMenu.style.height = alturaDisponible + 'px';

botonMenu.addEventListener("click", function(){

    fondoMenu.classList.toggle("mostrar");

});