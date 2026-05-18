function ottieniListaSalvati() {
    return document.querySelector("[data-lista-salvati]");
}

function ottieniRisultatiSalvati() {
    const listaSalvati = ottieniListaSalvati();

    if (!listaSalvati) {
        return [];
    }

    return Array.from(listaSalvati.querySelectorAll("[data-risultato-salvato]"));
}

function normalizzaTestoSalvati(testo) {
    return testo.toLowerCase().trim();
}

function aggiornaStatoVuoto() {
    const risultatiSalvati = ottieniRisultatiSalvati();
    const messaggioVuoto = document.querySelector("[data-messaggio-vuoto-salvati]");

    if (!messaggioVuoto) {
        return;
    }

    const risultatiVisibili = risultatiSalvati.filter(function (risultatoSalvato) {
        return !risultatoSalvato.classList.contains("nascosto");
    });

    messaggioVuoto.classList.toggle("visibile", risultatiVisibili.length === 0);
}
