import Interfaz from "./main.js";

const UI = new Interfaz();

document.getElementById("ordenar").addEventListener("click",function(){
    UI.abrirMenuOrdenar();
});

document.getElementById("filtrar").addEventListener("click", function(){
    UI.abrirMenuFiltrar();
});

UI.ventanaVerModelo();