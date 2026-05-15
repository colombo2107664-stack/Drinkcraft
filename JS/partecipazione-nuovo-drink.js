function inizializzaPopupNuovoDrink() {
    const bottoneCreaNuovoDrink = trovaElemento("[data-apri-nuovo-drink]");
    const popupNuovoDrink = trovaElemento("[data-popup-nuovo-drink]");

    if (!bottoneCreaNuovoDrink || !popupNuovoDrink) {
        return;
    }

    bottoneCreaNuovoDrink.addEventListener("click", function () {
        apriPopupNuovoDrink();
    });
}

function apriPopupNuovoDrink() {
    const popupNuovoDrink = trovaElemento("[data-popup-nuovo-drink]");

    apriPopupPartecipazione(popupNuovoDrink);
}

function chiudiPopupNuovoDrink() {
    const popupNuovoDrink = trovaElemento("[data-popup-nuovo-drink]");

    chiudiPopupPartecipazione(popupNuovoDrink);
}

document.addEventListener("DOMContentLoaded", inizializzaPopupNuovoDrink);
