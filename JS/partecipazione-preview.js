function inizializzaPreviewDrink() {
    const selettoreDrink = trovaElemento("[data-selettore-drink]");
    const inputImmagine = trovaElemento("[data-input-immagine]");

    if (selettoreDrink) {
        selettoreDrink.addEventListener("change", aggiornaPreviewDrink);
    }

    if (inputImmagine) {
        inputImmagine.addEventListener("change", aggiornaAnteprimaImmagine);
    }
}

function aggiornaPreviewDrink() {
    const selettoreDrink = trovaElemento("[data-selettore-drink]");
    const drinkSelezionato = selettoreDrink.options[selettoreDrink.selectedIndex];
    const titoloDrink = trovaElemento("[data-titolo-preview]");
    const descrizioneDrink = trovaElemento("[data-descrizione-preview]");
    const immagineDrink = trovaElemento("[data-immagine-preview]");

    if (!drinkSelezionato || !drinkSelezionato.value) {
        cambiaTesto(titoloDrink, "Nessun drink selezionato");
        cambiaTesto(descrizioneDrink, "Scegli un drink per vedere subito l'anteprima.");
        immagineDrink.src = "../Immagini/no_alcool.png";
        immagineDrink.alt = "Anteprima drink selezionato";
        riattivaBottoneConfermaDrink();
        return;
    }

    cambiaTesto(titoloDrink, drinkSelezionato.dataset.nome);
    cambiaTesto(descrizioneDrink, drinkSelezionato.dataset.descrizione);
    immagineDrink.src = drinkSelezionato.dataset.immagine;
    immagineDrink.alt = "Anteprima " + drinkSelezionato.dataset.nome;
    riattivaBottoneConfermaDrink();
}

function aggiornaAnteprimaImmagine() {
    const inputImmagine = trovaElemento("[data-input-immagine]");
    const immagineDrink = trovaElemento("[data-immagine-preview]");
    const fileSelezionato = inputImmagine.files[0];

    if (!fileSelezionato) {
        return;
    }

    const lettoreImmagine = new FileReader();

    lettoreImmagine.addEventListener("load", function () {
        immagineDrink.src = lettoreImmagine.result;
        immagineDrink.alt = "Immagine caricata per il drink candidato";
    });

    lettoreImmagine.readAsDataURL(fileSelezionato);
}

function riattivaBottoneConfermaDrink() {
    const bottoneConferma = trovaElemento("[data-bottone-conferma]");

    if (!bottoneConferma) {
        return;
    }

    bottoneConferma.disabled = false;
    cambiaTesto(bottoneConferma, "Usa drink selezionato");
}

document.addEventListener("DOMContentLoaded", inizializzaPreviewDrink);
