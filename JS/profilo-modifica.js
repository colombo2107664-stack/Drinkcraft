function inizializzaModificaProfilo() {
    const formModificaProfilo = document.querySelector("[data-form-modifica-profilo]");

    if (!formModificaProfilo) {
        return;
    }

    inizializzaPopupModificaProfilo();
    collegaCampoTesto(formModificaProfilo, "[data-campo-nome]", "[data-anteprima-nome]");
    collegaCampoTesto(formModificaProfilo, "[data-campo-username]", "[data-anteprima-username]");
    collegaCampoTesto(formModificaProfilo, "[data-campo-bio]", "[data-anteprima-bio]");
    collegaCampoImmagine(formModificaProfilo);

    formModificaProfilo.addEventListener("submit", function (evento) {
        evento.preventDefault();
    });
}

function inizializzaPopupModificaProfilo() {
    const bottoneApri = document.querySelector("[data-apri-modifica-profilo]");
    const bottoneChiudi = document.querySelector("[data-chiudi-modifica-profilo]");
    const popupModificaProfilo = document.querySelector("[data-popup-modifica-profilo]");

    if (!bottoneApri || !bottoneChiudi || !popupModificaProfilo) {
        return;
    }

    bottoneApri.addEventListener("click", function () {
        apriPopupModificaProfilo(popupModificaProfilo);
    });

    bottoneChiudi.addEventListener("click", function () {
        chiudiPopupModificaProfilo(popupModificaProfilo);
    });

    popupModificaProfilo.addEventListener("click", function (evento) {
        if (evento.target === popupModificaProfilo) {
            chiudiPopupModificaProfilo(popupModificaProfilo);
        }
    });

    document.addEventListener("keydown", function (evento) {
        if (evento.key === "Escape") {
            chiudiPopupModificaProfilo(popupModificaProfilo);
        }
    });
}

function apriPopupModificaProfilo(popupModificaProfilo) {
    popupModificaProfilo.classList.add("aperto");
}

function chiudiPopupModificaProfilo(popupModificaProfilo) {
    popupModificaProfilo.classList.remove("aperto");
}

function collegaCampoTesto(formModificaProfilo, selettoreCampo, selettoreAnteprima) {
    const campoProfilo = formModificaProfilo.querySelector(selettoreCampo);
    const anteprimaProfilo = document.querySelector(selettoreAnteprima);

    if (!campoProfilo || !anteprimaProfilo) {
        return;
    }

    campoProfilo.addEventListener("input", function () {
        aggiornaAnteprimaTesto(campoProfilo, anteprimaProfilo);
    });
}

function aggiornaAnteprimaTesto(campoProfilo, anteprimaProfilo) {
    const nuovoTesto = campoProfilo.value.trim();

    if (nuovoTesto === "") {
        return;
    }

    anteprimaProfilo.textContent = nuovoTesto;
}

function collegaCampoImmagine(formModificaProfilo) {
    const immagineProfiloInput = formModificaProfilo.querySelector("[data-campo-immagine-profilo]");
    const anteprimaProfilo = document.querySelector("[data-anteprima-immagine-profilo]");

    if (!immagineProfiloInput || !anteprimaProfilo) {
        return;
    }

    immagineProfiloInput.addEventListener("change", function () {
        aggiornaAnteprimaImmagine(immagineProfiloInput, anteprimaProfilo);
    });
}

function aggiornaAnteprimaImmagine(immagineProfiloInput, anteprimaProfilo) {
    const fileImmagine = immagineProfiloInput.files[0];

    if (!fileImmagine) {
        return;
    }

    anteprimaProfilo.src = URL.createObjectURL(fileImmagine);
}

document.addEventListener("DOMContentLoaded", inizializzaModificaProfilo);
