  function mostrarContenido() {
        elemento = document.getElementById("partedet");
        presionar = document.getElementById("presionar");
        if (presionar.checked) {
            elemento.style.display='block';
        }
        else {
            elemento.style.display='none';
        }
    }