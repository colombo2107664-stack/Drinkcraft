function inizializzaPopupDrinkPubblicati() {
    const bottoneScegliDrink = trovaElemento("[data-apri-drink-pubblicati]");
    const popupDrinkPubblicati = trovaElemento("[data-popup-drink-pubblicati]");
    const listaDrinkPubblicati = trovaElemento("[data-lista-drink-pubblicati]");

    if (!bottoneScegliDrink || !popupDrinkPubblicati || !listaDrinkPubblicati) {
        return;
    }

    bottoneScegliDrink.addEventListener("click", function () {
        apriPopupDrinkPubblicati();
    });

    listaDrinkPubblicati.addEventListener("click", function (evento) {
        const drinkSelezionato = evento.target.closest("[data-id-drink]");

        if (drinkSelezionato) {
            selezionaDrinkPubblicato(drinkSelezionato);
        }
    });
}

function apriPopupDrinkPubblicati() {
    const popupDrinkPubblicati = trovaElemento("[data-popup-drink-pubblicati]");

    apriPopupPartecipazione(popupDrinkPubblicati);
}

function chiudiPopupDrinkPubblicati() {
    const popupDrinkPubblicati = trovaElemento("[data-popup-drink-pubblicati]");

    chiudiPopupPartecipazione(popupDrinkPubblicati);
}

function selezionaDrinkPubblicato(drinkSelezionato) {
    mostraDrinkSelezionato(drinkSelezionato);
    chiudiPopupDrinkPubblicati();
}

function mostraDrinkSelezionato(drinkSelezionato) {
    const areaSelezioneDrink = trovaElemento("[data-area-selezione-drink]");
    const immagineDrink = trovaElemento("[data-immagine-drink-selezionato]");
    const nomeDrink = trovaElemento("[data-nome-drink-selezionato]");
    const descrizioneDrink = trovaElemento("[data-descrizione-drink-selezionato]");

    areaSelezioneDrink.hidden = false;
    immagineDrink.src = drinkSelezionato.dataset.immagineDrink;
    immagineDrink.alt = drinkSelezionato.dataset.nomeDrink;
    cambiaTesto(nomeDrink, drinkSelezionato.dataset.nomeDrink);
    cambiaTesto(descrizioneDrink, drinkSelezionato.dataset.descrizioneDrink);
}

document.addEventListener("DOMContentLoaded", inizializzaPopupDrinkPubblicati);
