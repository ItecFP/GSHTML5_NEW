window.addEventListener("scroll",scroll);
window.addEventListener("resize",resize);
window.addEventListener("load", load);

function scroll(){
    if (window.scrollY > 200) {
        document.getElementById("logo").innerHTML = '<img class="loguito d-flex align-items-center" src="video/LogoPequeño.gif" alt="loguito">';
    }else if (window.scrollY <= 0 && window.innerWidth >= 576){
        document.getElementById("logo").innerHTML = '<p class="fall2 guia">Guía</p><p class="suprema fall"><span class="parpadear">S</span>uprema </p><p class="fall3 html5">HTML5</p>';
    }
}

function resize(){
    if (window.innerWidth < 576) {
        document.getElementById("logo").innerHTML = '<img class="loguito d-flex align-items-center" src="video/LogoPequeño.gif" alt="loguito">';
        document.getElementById("interiorBarra").classList.remove("justify-content-between");
        document.getElementById("interiorBarra").classList.add("justify-content-center");
    }else{
        document.getElementById("interiorBarra").classList.remove("justify-content-center");
        document.getElementById("interiorBarra").classList.add("justify-content-between");
    }if (window.scrollY <= 0 && window.innerWidth >= 576){
        document.getElementById("logo").innerHTML = '<p class="fall2 guia">Guía</p><p class="suprema fall"><span class="parpadear">S</span>uprema </p><p class="fall3 html5">HTML5</p>';
    }
}

function load(){
    if (window.innerWidth < 576) {
        document.getElementById("logo").innerHTML = '<img class="loguito d-flex align-items-center" src="video/LogoPequeño.gif" alt="loguito">';
        document.getElementById("interiorBarra").classList.remove("justify-content-between");
        document.getElementById("interiorBarra").classList.add("justify-content-center");
    }
}