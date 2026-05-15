function trovaFormDrink() {
    return document.querySelector("[data-form-drink]");
}

function creaElemento(tag, classeCss, testo) {
    const elemento = document.createElement(tag);

    if (classeCss) {
        elemento.className = classeCss;
    }

    if (testo) {
        elemento.textContent = testo;
    }

    return elemento;
}

function segnalaModificaForm() {
    document.dispatchEvent(new CustomEvent("formDrinkAggiornato"));
}

function mostraErroreForm(testoErrore) {
    const messaggioErrore = document.querySelector("[data-messaggio-validazione]");

    if (!messaggioErrore) {
        return;
    }

    messaggioErrore.textContent = testoErrore;
    messaggioErrore.hidden = testoErrore === "";
}

function leggiChiaveSalvataggio() {
    const formDrink = trovaFormDrink();

    return formDrink.dataset.chiaveSalvataggio || "drinkcraft-form-drink-temporaneo";
}

function aggiornaAnteprimaImmagineDrink() {
    const inputImmagine = document.getElementById("Immagine");
    const anteprimaImmagine = document.getElementById("anteprimaImmagine");
    const testoDefault = document.querySelector(".TestoImm");
    const iconaDefault = document.querySelector(".IconaImm");

    if (!inputImmagine || !anteprimaImmagine || !inputImmagine.files[0]) {
        return;
    }

    const fileSelezionato = inputImmagine.files[0];
    const lettoreImmagine = new FileReader();

    lettoreImmagine.addEventListener("load", function () {
        anteprimaImmagine.src = lettoreImmagine.result;
        anteprimaImmagine.hidden = false;

        if (testoDefault) {
            testoDefault.hidden = true;
        }

        if (iconaDefault) {
            iconaDefault.hidden = true;
        }
    });

    lettoreImmagine.readAsDataURL(fileSelezionato);
}

function inizializzaAnteprimaImmagineDrink() {
    const inputImmagine = document.getElementById("Immagine");

    if (!inputImmagine) {
        return;
    }

    inputImmagine.addEventListener("change", function () {
        aggiornaAnteprimaImmagineDrink();
        segnalaModificaForm();
    });
}

document.addEventListener("DOMContentLoaded", inizializzaAnteprimaImmagineDrink);
