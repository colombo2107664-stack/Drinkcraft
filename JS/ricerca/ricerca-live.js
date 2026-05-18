function inizializzaRicercaLive() {
    const inputRicerca = ottieniInputRicerca();
    const formRicerca = document.querySelector("[data-form-ricerca]");

    if (!inputRicerca) {
        return;
    }

    inputRicerca.addEventListener("input", aggiornaRisultatiRicerca);

    if (formRicerca) {
        formRicerca.addEventListener("submit", function (evento) {
            evento.preventDefault();
            aggiornaRisultatiRicerca();
        });
    }
}

document.addEventListener("DOMContentLoaded", inizializzaRicercaLive);
