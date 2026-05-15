function inizializzaRicercaEspandibile() {
    const contenitoreRicerca = document.querySelector("[data-contenitore-ricerca]");
    const inputRicerca = document.querySelector("[data-input-ricerca]");

    if (!contenitoreRicerca || !inputRicerca) {
        return;
    }

    inputRicerca.addEventListener("focus", function () {
        gestisciFocusRicerca(contenitoreRicerca);
    });

    inputRicerca.addEventListener("blur", function () {
        gestisciBlurRicerca(contenitoreRicerca);
    });
}

function gestisciFocusRicerca(contenitoreRicerca) {
    contenitoreRicerca.classList.add("ricerca-aperta");
}

function gestisciBlurRicerca(contenitoreRicerca) {
    contenitoreRicerca.classList.remove("ricerca-aperta");
}

document.addEventListener("DOMContentLoaded", inizializzaRicercaEspandibile);
