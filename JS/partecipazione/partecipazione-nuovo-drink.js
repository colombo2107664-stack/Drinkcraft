function inizializzaPopupNuovoDrink() {
    const bottoneCreaNuovoDrink = trovaElemento("[data-apri-nuovo-drink]");
    const popupNuovoDrink = trovaElemento("[data-popup-nuovo-drink]");
    const formNuovoDrink = document.querySelector("[data-form-drink]");

    if (!bottoneCreaNuovoDrink || !popupNuovoDrink) {
        return;
    }

    bottoneCreaNuovoDrink.addEventListener("click", function () {
        apriPopupNuovoDrink();
    });

    if (formNuovoDrink) {
        formNuovoDrink.addEventListener("submit", gestisciInvioFormNuovoDrink);
    }
}

function apriPopupNuovoDrink() {
    const popupNuovoDrink = trovaElemento("[data-popup-nuovo-drink]");

    apriPopupPartecipazione(popupNuovoDrink);
}

function chiudiPopupNuovoDrink() {
    const popupNuovoDrink = trovaElemento("[data-popup-nuovo-drink]");

    chiudiPopupPartecipazione(popupNuovoDrink);
}

async function gestisciInvioFormNuovoDrink(evento) {
    evento.preventDefault();

    const form = evento.target;
    const formValido = typeof controllaValiditaForm === "function"
        ? controllaValiditaForm()
        : form.checkValidity();

    if (!formValido) {
        return;
    }

    const datiDrink = raccogliDatiForm();
    const inputImmagine = form.querySelector("#Immagine");

    if (inputImmagine && inputImmagine.files && inputImmagine.files[0]) {
        datiDrink.immagine = await ottieniBlobImmagine(inputImmagine);
    } else {
        datiDrink.immagine = "../Immagini/no_alcool.png";
    }

    mostraAnteprimaDrinkCreato(datiDrink);
    chiudiPopupNuovoDrink();
    form.reset();
}

function mostraAnteprimaDrinkCreato(datiDrink) {
    const areaSelezioneDrink = trovaElemento("[data-area-selezione-drink]");
    const immagineDrink = trovaElemento("[data-immagine-drink-selezionato]");
    const nomeDrink = trovaElemento("[data-nome-drink-selezionato]");
    const descrizioneDrink = trovaElemento("[data-descrizione-drink-selezionato]");

    if (!areaSelezioneDrink || !immagineDrink || !nomeDrink || !descrizioneDrink) {
        return;
    }

    areaSelezioneDrink.hidden = false;
    immagineDrink.src = datiDrink.immagine;
    immagineDrink.alt = datiDrink.nomeDrink || "Drink creato";
    cambiaTesto(nomeDrink, datiDrink.nomeDrink || "Drink creato");
    cambiaTesto(descrizioneDrink, datiDrink.descrizione || `${datiDrink.categoria || ""}${datiDrink.difficolta ? " • " + datiDrink.difficolta : ""}`);
}

function ottieniBlobImmagine(inputFile) {
    return new Promise((risolvi) => {
        if (!inputFile || !inputFile.files || !inputFile.files[0]) {
            risolvi(null);
            return;
        }

        const lettore = new FileReader();
        lettore.addEventListener("load", function () {
            risolvi(lettore.result);
        });
        lettore.readAsDataURL(inputFile.files[0]);
    });
}

document.addEventListener("DOMContentLoaded", inizializzaPopupNuovoDrink);
