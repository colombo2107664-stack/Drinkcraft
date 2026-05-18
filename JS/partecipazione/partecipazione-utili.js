function trovaElemento(selettore) {
    return document.querySelector(selettore);
}

function cambiaTesto(elemento, testo) {
    if (!elemento) {
        return;
    }

    elemento.textContent = testo;
}

function aggiungiClasseTemporanea(elemento, nomeClasse) {
    if (!elemento) {
        return;
    }

    elemento.classList.remove(nomeClasse);

    setTimeout(function () {
        elemento.classList.add(nomeClasse);
    }, 10);
}
