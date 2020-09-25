export default class Interfaz{

    abrirMenu(){
        let fondoMenu = document.getElementById("fondoMenu");

        fondoMenu.classList.toggle("mostrar");
    }

    abrirMenuOrdenar(){
        let menuOrdenar = document.getElementById("menuOrdenar");
        menuOrdenar.classList.toggle("visible");
    }

    abrirMenuFiltrar(){
        let menuFiltrar = document.getElementById("categorias");
        let anchoPantalla = document.body.clientWidth;

        if(anchoPantalla <= 980){
            menuFiltrar.classList.toggle("visible");
        }

    }

    ventanaVerModelo(){
    let autos = document.getElementsByClassName("link-modelo");
    let ventanaModal = document.getElementById("verModelo");
    let textoDescripcion = document.getElementsByClassName("descripcion");
    let verModeloIMG = document.getElementById("verModeloIMG");

    for(let j = 0; j <= autos.length-1;j++){

        autos[j].addEventListener("mouseenter", function(e){
            let elementoPadre = e.target.parentNode;
            let elemento = e.target;

            let centroTextoDescripcion = textoDescripcion[j].getBoundingClientRect();

            let cajaModal = ventanaModal.getBoundingClientRect();
            let posX = (centroTextoDescripcion.x - cajaModal.x) +  60;
            let posY = elementoPadre.offsetTop + 70;
            
            verModeloIMG.style.left = (posX) + 'px';
            verModeloIMG.style.top = (posY) + 'px';

            ventanaModal.style.visibility = 'visible';

            elementoPadre.style.transition = 'all .5s';
            elementoPadre.style.transform = 'scale(115%, 115%)';
        });

        autos[j].addEventListener("mouseleave", function(e){
            let elementoPadre = e.target.parentNode;
            elementoPadre.style.transition = 'all .5s';
            elementoPadre.style.transform = 'scaleY(100%)';
            ventanaModal.style.visibility = 'hidden';
        });
        }
    }

}