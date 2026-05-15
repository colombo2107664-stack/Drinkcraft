function inizializzaValidazioneForm() {
    const formDrink = trovaFormDrink();

    if (!formDrink) {
        return;
    }

    formDrink.addEventListener("input", controllaValiditaForm);
    formDrink.addEventListener("change", controllaValiditaForm);
    document.addEventListener("formDrinkAggiornato", controllaValiditaForm);

    formDrink.addEventListener("submit", function (evento) {
        if (!controllaValiditaForm()) {
            evento.preventDefault();
        }
    });

    controllaValiditaForm();
}

function controllaValiditaForm() {
    const formDrink = trovaFormDrink();
    const erroreForm = trovaPrimoErroreForm(formDrink);
    const formValido = erroreForm === "";

    mostraErroreForm(erroreForm);
    aggiornaStatoPulsantePubblica(formValido);

    return formValido;
}

function trovaPrimoErroreForm(formDrink) {
    if (!formDrink.checkValidity()) {
        return "Compila tutti i campi obbligatori prima di pubblicare.";
    }

    if (!ingredientiValidi()) {
        return "Inserisci almeno un ingrediente con nome e quantita.";
    }

    if (!passaggiValidi()) {
        return "Inserisci almeno un passaggio di preparazione.";
    }

    return "";
}

function ingredientiValidi() {
    const righeIngredienti = document.querySelectorAll("[data-riga-ingrediente]");

    if (righeIngredienti.length === 0) {
        return false;
    }

    return Array.from(righeIngredienti).every(function (rigaIngrediente) {
        const nomeIngrediente = rigaIngrediente.querySelector("[data-ingrediente-nome]");
        const quantitaIngrediente = rigaIngrediente.querySelector("[data-ingrediente-quantita]");

        return nomeIngrediente.value.trim() !== "" && quantitaIngrediente.value.trim() !== "";
    });
}

function passaggiValidi() {
    const passaggi = document.querySelectorAll("[data-riga-passaggio] [data-passaggio-testo]");

    if (passaggi.length === 0) {
        return false;
    }

    return Array.from(passaggi).every(function (passaggio) {
        return passaggio.value.trim().length >= 3;
    });
}

function aggiornaStatoPulsantePubblica(formValido) {
    const pulsantePubblica = document.querySelector("[data-pulsante-pubblica]");

    if (!pulsantePubblica) {
        return;
    }

    pulsantePubblica.disabled = !formValido;
}

document.addEventListener("DOMContentLoaded", inizializzaValidazioneForm);
