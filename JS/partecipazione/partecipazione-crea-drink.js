function inizializzaPopupCreaDrink() {
    const bottoneApri = trovaElemento("[data-apri-crea-drink]");
    const popupCreaDrink = trovaElemento("[data-popup-crea-drink]");
    const bottoneChiudi = trovaElemento("[data-chiudi-crea-drink]");

    if (!bottoneApri || !popupCreaDrink) {
        return;
    }

    bottoneApri.addEventListener("click", apriPopupCreaDrink);
    popupCreaDrink.addEventListener("click", chiudiPopupCliccandoFuori);

    if (bottoneChiudi) {
        bottoneChiudi.addEventListener("click", chiudiPopupCreaDrink);
    }

    inizializzaImmagineNuovoDrink();
    inizializzaCampiDinamiciNuovoDrink();
}

function apriPopupCreaDrink() {
    const popupCreaDrink = trovaElemento("[data-popup-crea-drink]");

    popupCreaDrink.classList.add("aperto");
}

function chiudiPopupCreaDrink() {
    const popupCreaDrink = trovaElemento("[data-popup-crea-drink]");

    popupCreaDrink.classList.remove("aperto");
}

function chiudiPopupCliccandoFuori(evento) {
    const popupCreaDrink = trovaElemento("[data-popup-crea-drink]");

    if (evento.target === popupCreaDrink) {
        chiudiPopupCreaDrink();
    }
}

function inizializzaImmagineNuovoDrink() {
    const inputImmagine = trovaElemento("[data-input-immagine-crea]");

    if (!inputImmagine) {
        return;
    }

    inputImmagine.addEventListener("change", aggiornaImmagineNuovoDrink);
}

function aggiornaImmagineNuovoDrink() {
    const inputImmagine = trovaElemento("[data-input-immagine-crea]");
    const anteprimaImmagine = trovaElemento("[data-anteprima-immagine-crea]");
    const testoImmagine = trovaElemento("[data-testo-immagine-crea]");
    const iconaImmagine = trovaElemento("[data-icona-immagine-crea]");
    const fileSelezionato = inputImmagine.files[0];

    if (!fileSelezionato) {
        return;
    }

    const lettoreImmagine = new FileReader();

    lettoreImmagine.addEventListener("load", function () {
        anteprimaImmagine.src = lettoreImmagine.result;
        anteprimaImmagine.hidden = false;
        testoImmagine.hidden = true;
        iconaImmagine.hidden = true;
    });

    lettoreImmagine.readAsDataURL(fileSelezionato);
}

function inizializzaCampiDinamiciNuovoDrink() {
    const bottoneIngrediente = trovaElemento("[data-aggiungi-ingrediente]");
    const bottonePassaggio = trovaElemento("[data-aggiungi-passaggio]");

    if (bottoneIngrediente) {
        bottoneIngrediente.addEventListener("click", aggiungiIngredienteNuovoDrink);
    }

    if (bottonePassaggio) {
        bottonePassaggio.addEventListener("click", aggiungiPassaggioNuovoDrink);
    }
}

function aggiungiIngredienteNuovoDrink() {
    const campoIngredienti = trovaElemento(".form-crea-drink-sfida .campoIngredienti");
    const bottoneIngrediente = trovaElemento("[data-aggiungi-ingrediente]");
    const nuovaRiga = document.createElement("div");
    const inputIngrediente = document.createElement("input");
    const inputQuantita = document.createElement("input");

    nuovaRiga.className = "riga-aggiunta";

    inputIngrediente.type = "text";
    inputIngrediente.name = "Ingredienti[]";
    inputIngrediente.placeholder = "Es. Vodka";
    inputIngrediente.required = true;

    inputQuantita.type = "text";
    inputQuantita.name = "quantita[]";
    inputQuantita.placeholder = "50ml";
    inputQuantita.required = true;

    nuovaRiga.appendChild(inputIngrediente);
    nuovaRiga.appendChild(inputQuantita);

    campoIngredienti.insertBefore(nuovaRiga, bottoneIngrediente);
}

function aggiungiPassaggioNuovoDrink() {
    const campoPreparazione = trovaElemento(".form-crea-drink-sfida .campoPreparazione");
    const bottonePassaggio = trovaElemento("[data-aggiungi-passaggio]");
    const nuovoPassaggio = document.createElement("input");

    nuovoPassaggio.type = "text";
    nuovoPassaggio.name = "Preparazione[]";
    nuovoPassaggio.placeholder = "Nuovo passaggio...";
    nuovoPassaggio.required = true;
    nuovoPassaggio.className = "passaggio-aggiunto";

    campoPreparazione.insertBefore(nuovoPassaggio, bottonePassaggio);
}

document.addEventListener("DOMContentLoaded", inizializzaPopupCreaDrink);
