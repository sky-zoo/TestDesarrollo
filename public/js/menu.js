import Interfaz from "./main.js";

const UI = new Interfaz();

document.getElementById("botonMenu").addEventListener("click", function(){
    UI.abrirMenu();
});