function trovaElemento(selettore) {
    return document.querySelector(selettore);
}

function cambiaTesto(elemento, testo) {
    if (!elemento) {
        return;
    }

    elemento.textContent = testo;
}
