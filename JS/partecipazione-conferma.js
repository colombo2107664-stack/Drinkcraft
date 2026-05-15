function inizializzaConfermaPartecipazione() {
    const bottoneConferma = trovaElemento("[data-bottone-conferma]");
    const popupConferma = trovaElemento("[data-popup-conferma]");
    const bottoneChiudi = trovaElemento("[data-chiudi-popup-conferma]");

    if (!bottoneConferma || !popupConferma) {
        return;
    }

    bottoneConferma.addEventListener("click", function () {
        if (!drinkGiaSelezionato()) {
            mostraMessaggioConferma("Scegli prima un drink da candidare.");
            return;
        }

        mostraPopupConferma();
        aggiornaBottoneConferma();
    });

    if (bottoneChiudi) {
        bottoneChiudi.addEventListener("click", chiudiPopupConferma);
    }

    popupConferma.addEventListener("click", function (evento) {
        if (evento.target === popupConferma) {
            chiudiPopupConferma();
        }
    });
}

function mostraPopupConferma() {
    const titoloDrink = trovaElemento("[data-titolo-preview]");
    const nomeDrink = titoloDrink.textContent;

    mostraMessaggioConferma("Partecipazione confermata con: " + nomeDrink);
}

function mostraMessaggioConferma(testoMessaggio) {
    const popupConferma = trovaElemento("[data-popup-conferma]");
    const messaggioConferma = trovaElemento("[data-messaggio-conferma]");

    cambiaTesto(messaggioConferma, testoMessaggio);
    popupConferma.classList.add("aperto");
    applicaAnimazioneConferma(popupConferma);
}

function chiudiPopupConferma() {
    const popupConferma = trovaElemento("[data-popup-conferma]");

    popupConferma.classList.remove("aperto");
}

function aggiornaBottoneConferma() {
    const bottoneConferma = trovaElemento("[data-bottone-conferma]");

    cambiaTesto(bottoneConferma, "Drink selezionato confermato");
    bottoneConferma.disabled = true;
}

function applicaAnimazioneConferma(elemento) {
    aggiungiClasseTemporanea(elemento, "conferma-animata");
}

function drinkGiaSelezionato() {
    const selettoreDrink = trovaElemento("[data-selettore-drink]");

    if (!selettoreDrink) {
        return false;
    }

    return selettoreDrink.value !== "";
}

document.addEventListener("DOMContentLoaded", inizializzaConfermaPartecipazione);
