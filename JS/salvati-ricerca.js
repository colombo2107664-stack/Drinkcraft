function inizializzaRicercaSalvati() {
    const inputRicerca = document.querySelector("[data-input-ricerca-salvati]");

    if (!inputRicerca) {
        return;
    }

    inputRicerca.addEventListener("input", function () {
        filtraRisultatiRicerca(inputRicerca.value);
    });

    filtraRisultatiRicerca("");
}

function filtraRisultatiRicerca(testoRicerca) {
    const risultatiRicerca = ottieniRisultatiSalvati();
    const testoNormalizzato = normalizzaTestoSalvati(testoRicerca);

    risultatiRicerca.forEach(function (risultatoRicerca) {
        mostraRisultatoFiltrato(risultatoRicerca, testoNormalizzato);
    });

    aggiornaStatoVuoto();
}

function mostraRisultatoFiltrato(risultatoRicerca, testoRicerca) {
    const testoRisultato = creaTestoRisultato(risultatoRicerca);
    const ricercaVuota = testoRicerca === "";
    const trovato = testoRisultato.includes(testoRicerca);

    risultatoRicerca.classList.toggle("nascosto", !ricercaVuota && !trovato);
}

function creaTestoRisultato(risultatoRicerca) {
    return normalizzaTestoSalvati(
        risultatoRicerca.dataset.nome + " " +
        risultatoRicerca.dataset.categoria
    );
}

document.addEventListener("DOMContentLoaded", inizializzaRicercaSalvati);
