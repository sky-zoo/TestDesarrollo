class Interfaz{

    abrirMenu(){
        let fondoMenu = document.getElementById("fondoMenu");

        fondoMenu.classList.toggle("mostrar");
    }

    backgroundFiltros(e){
        let itemsLiActivos = document.getElementById("categorias").getElementsByClassName("activo");
        let itemLi = e.target.parentNode;
        itemsLiActivos[0].classList.toggle("activo");
        itemLi.classList.toggle("activo");
    }

}

const UI = new Interfaz();

// Boton para abrir el menu
document.getElementById("botonMenu").addEventListener("click", function(){
    UI.abrirMenu();

});

// Si se clicka en un elemento de los filtros cambia el background 
document.getElementById("categorias").addEventListener("click", function(e){
    if(e.target.nodeName === "A"){
        UI.backgroundFiltros(e);
    }
});

// ACA ABAJO NECESITO PENSAR COMO MOSTRAR LA VENTANA MODAL DE "VER MODELO"
let autos = document.getElementsByClassName("link-modelo");
let ventanaModal = document.getElementById("verModelo");
let textoDesc = document.getElementsByClassName("descripcion");
let verModeloIMG = document.getElementById("verModeloIMG");
// let ventanaModal = document.getElementsByClassName("ver-modelo");

for(let j = 0; j <= autos.length-1;j++){

    autos[j].addEventListener("mouseenter", function(e){
        let elementoPadre = e.target.parentNode;
        let elemento = e.target;
        let direccionamiento = elemento.href;

        let centroTextoDesc = textoDesc[j].getBoundingClientRect();

        let cajaModal = ventanaModal.getBoundingClientRect();
        let posX = (centroTextoDesc.x - cajaModal.x) +  60;
        let posY = elementoPadre.offsetTop + 70;
        
        verModeloIMG.style.left = (posX) + 'px';
        verModeloIMG.style.top = (posY) + 'px';

        ventanaModal.style.visibility = 'visible';

        elementoPadre.style.transition = 'all .5s';
        elementoPadre.style.transform = 'scale(115%, 115%)';
        // ventanaModal.className = "ver-modelo visible"; //puedo usar toggle tmb
        ventanaModal.href = direccionamiento;
    });

    autos[j].addEventListener("mouseleave", function(e){
        // ventanaModal.className = "ver-modelo"; //usar toggle tmb
        let elementoPadre = e.target.parentNode;
        elementoPadre.style.transition = 'all .5s';
        elementoPadre.style.transform = 'scaleY(100%)';
        ventanaModal.style.visibility = 'hidden';
    });
}