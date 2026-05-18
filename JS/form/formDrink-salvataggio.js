function inizializzaSalvataggioTemporaneo() {
    const formDrink = trovaFormDrink();

    if (!formDrink) {
        return;
    }

    ripristinaDatiTemporanei();

    formDrink.addEventListener("input", salvaFormTemporaneamente);
    formDrink.addEventListener("change", salvaFormTemporaneamente);
    document.addEventListener("formDrinkAggiornato", salvaFormTemporaneamente);

    formDrink.addEventListener("submit", function () {
        svuotaSalvataggioTemporaneo();
    });

    formDrink.addEventListener("reset", function () {
        svuotaSalvataggioTemporaneo();
        setTimeout(function () {
            document.dispatchEvent(new CustomEvent("formDrinkAggiornato"));
        }, 0);
    });

    document.dispatchEvent(new CustomEvent("formDrinkAggiornato"));
}

function salvaFormTemporaneamente() {
    const datiTemporanei = raccogliDatiForm();

    localStorage.setItem(leggiChiaveSalvataggio(), JSON.stringify(datiTemporanei));
}

function ripristinaDatiTemporanei() {
    const datiSalvati = localStorage.getItem(leggiChiaveSalvataggio());

    if (!datiSalvati) {
        return;
    }

    let datiTemporanei = null;

    try {
        datiTemporanei = JSON.parse(datiSalvati);
    } catch (errore) {
        svuotaSalvataggioTemporaneo();
        return;
    }

    ripristinaCampiPrincipali(datiTemporanei);
    ripristinaIngredienti(datiTemporanei.ingredienti);
    ripristinaPassaggi(datiTemporanei.passaggi);
}

function raccogliDatiForm() {
    return {
        nomeDrink: valoreCampo("#nomeDrink"),
        descrizione: valoreCampo("[data-campo-descrizione-drink]"),
        categoria: leggiRadioSelezionato("Categoria"),
        difficolta: leggiRadioSelezionato("Difficolta"),
        ingredienti: raccogliIngredienti(),
        passaggi: raccogliPassaggi()
    };
}

function valoreCampo(selettore) {
    const campo = document.querySelector(selettore);

    return campo ? campo.value : "";
}

function raccogliIngredienti() {
    const righeIngredienti = document.querySelectorAll("[data-riga-ingrediente]");

    return Array.from(righeIngredienti).map(function (rigaIngrediente) {
        return {
            nome: rigaIngrediente.querySelector("[data-ingrediente-nome]").value,
            quantita: rigaIngrediente.querySelector("[data-ingrediente-quantita]").value
        };
    });
}

function raccogliPassaggi() {
    const passaggi = document.querySelectorAll("[data-riga-passaggio] [data-passaggio-testo]");

    return Array.from(passaggi).map(function (passaggio) {
        return passaggio.value;
    });
}

function leggiRadioSelezionato(nomeCampo) {
    const radioSelezionato = document.querySelector('input[name="' + nomeCampo + '"]:checked');

    return radioSelezionato ? radioSelezionato.value : "";
}

function ripristinaCampiPrincipali(datiTemporanei) {
    assegnaValoreCampo("#nomeDrink", datiTemporanei.nomeDrink);
    assegnaValoreCampo("[data-campo-descrizione-drink]", datiTemporanei.descrizione);
    selezionaRadio("Categoria", datiTemporanei.categoria);
    selezionaRadio("Difficolta", datiTemporanei.difficolta);
}

function assegnaValoreCampo(selettore, valore) {
    const campo = document.querySelector(selettore);

    if (campo) {
        campo.value = valore || "";
    }
}

function ripristinaIngredienti(ingredienti) {
    const righeIngredienti = document.querySelectorAll("[data-riga-ingrediente]");

    righeIngredienti.forEach(function (rigaIngrediente) {
        rigaIngrediente.remove();
    });

    if (!ingredienti || ingredienti.length === 0) {
        aggiungiIngrediente();
        return;
    }

    ingredienti.forEach(function (ingrediente) {
        aggiungiIngrediente(ingrediente.nome, ingrediente.quantita);
    });
}

function ripristinaPassaggi(passaggi) {
    const righePassaggi = document.querySelectorAll("[data-riga-passaggio]");

    righePassaggi.forEach(function (rigaPassaggio) {
        rigaPassaggio.remove();
    });

    if (!passaggi || passaggi.length === 0) {
        aggiungiPassaggio();
        return;
    }

    passaggi.forEach(function (passaggio) {
        aggiungiPassaggio(passaggio);
    });
}

function selezionaRadio(nomeCampo, valoreCampo) {
    const campoRadio = document.querySelector('input[name="' + nomeCampo + '"][value="' + valoreCampo + '"]');

    if (campoRadio) {
        campoRadio.checked = true;
    }
}

function svuotaSalvataggioTemporaneo() {
    localStorage.removeItem(leggiChiaveSalvataggio());
}

document.addEventListener("DOMContentLoaded", inizializzaSalvataggioTemporaneo);
