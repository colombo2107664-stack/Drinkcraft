function inizializzaCollegamentoToolbar() {
    const ricercaNavbar = leggiRicercaDaUrl();
    const inputRicerca = ottieniInputRicerca();

    if (!inputRicerca || ricercaNavbar === "") {
        aggiornaRisultatiRicerca();
        return;
    }

    inputRicerca.value = ricercaNavbar;
    aggiornaRisultatiRicerca();
}

function leggiRicercaDaUrl() {
    const parametriUrl = new URLSearchParams(window.location.search);

    return parametriUrl.get("ricerca") || "";
}

document.addEventListener("DOMContentLoaded", inizializzaCollegamentoToolbar);
