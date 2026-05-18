function inizializzaPrecompilazioneVariazione() {
    const formVariazione = trovaFormDrink();

    if (!formVariazione || localStorage.getItem(leggiChiaveSalvataggio())) {
        return;
    }

    const datiDrinkOriginale = leggiDatiDrinkOriginale();

    if (!datiDrinkOriginale) {
        return;
    }

    applicaDatiOriginali(datiDrinkOriginale);
}

function leggiDatiDrinkOriginale() {
    const contenitoreDati = document.getElementById("dati-drink-originale");

    if (!contenitoreDati) {
        return null;
    }

    try {
        return JSON.parse(contenitoreDati.textContent);
    } catch (errore) {
        return null;
    }
}

function applicaDatiOriginali(datiDrinkOriginale) {
    precompilaCampiDrink(datiDrinkOriginale);
    precompilaIngredienti(datiDrinkOriginale.ingredienti);
    precompilaPassaggi(datiDrinkOriginale.passaggi);
    segnalaModificaForm();
}

function precompilaCampiDrink(datiDrinkOriginale) {
    const campoNomeDrink = document.querySelector("[data-campo-nome-drink]");
    const campoDescrizione = document.querySelector("[data-campo-descrizione-drink]");

    if (campoNomeDrink) {
        campoNomeDrink.value = "Variante di " + datiDrinkOriginale.nome;
    }

    if (campoDescrizione) {
        campoDescrizione.value = datiDrinkOriginale.descrizione || "";
    }
}

function precompilaIngredienti(ingredientiOriginali) {
    const righeIngredienti = document.querySelectorAll("[data-riga-ingrediente]");

    righeIngredienti.forEach(function (rigaIngrediente) {
        rigaIngrediente.remove();
    });

    ingredientiOriginali.forEach(function (ingrediente) {
        aggiungiIngrediente(ingrediente.nome, ingrediente.quantita);
    });
}

function precompilaPassaggi(passaggiOriginali) {
    const righePassaggi = document.querySelectorAll("[data-riga-passaggio]");

    righePassaggi.forEach(function (rigaPassaggio) {
        rigaPassaggio.remove();
    });

    passaggiOriginali.forEach(function (passaggio) {
        aggiungiPassaggio(passaggio);
    });
}

document.addEventListener("DOMContentLoaded", inizializzaPrecompilazioneVariazione);
