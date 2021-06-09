var modo = document.querySelector(".mode");

function setModo(value){
    localStorage.setItem("modo", value);
    modo.class=localStorage.getItem("modo");
    modo.className = localStorage.getItem("modo");
}

modo.className = localStorage.getItem("modo");

