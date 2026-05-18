function ottieniInputRicerca() {
    return document.querySelector("[data-input-ricerca-pagina]");
}

function ottieniRisultatiRicerca() {
    return Array.from(document.querySelectorAll("[data-risultato-ricerca]"));
}

function normalizzaTestoRicerca(testo) {
    return testo.toLowerCase().trim();
}

function leggiValoreCampo(selettore) {
    const campo = document.querySelector(selettore);

    if (!campo) {
        return "";
    }

    return normalizzaTestoRicerca(campo.value);
}

function creaTestoRisultatoRicerca(risultatoRicerca) {
    return normalizzaTestoRicerca(
        risultatoRicerca.dataset.nome + " " +
        risultatoRicerca.dataset.categoria + " " +
        risultatoRicerca.dataset.difficolta + " " +
        risultatoRicerca.dataset.ingredienti
    );
}
