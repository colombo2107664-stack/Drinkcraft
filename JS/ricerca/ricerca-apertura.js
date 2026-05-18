function inizializzaAperturaRisultati() {
    const risultatiRicerca = ottieniRisultatiRicerca();

    risultatiRicerca.forEach(function (risultatoRicerca) {
        risultatoRicerca.addEventListener("click", function () {
            apriRisultatoRicerca(risultatoRicerca);
        });

        risultatoRicerca.addEventListener("keydown", function (evento) {
            if (evento.key === "Enter" || evento.key === " ") {
                evento.preventDefault();
                apriRisultatoRicerca(risultatoRicerca);
            }
        });
    });
}

function apriRisultatoRicerca(risultatoRicerca) {
    const urlRisultato = risultatoRicerca.dataset.url;

    if (!urlRisultato) {
        return;
    }

    window.location.href = urlRisultato;
}

document.addEventListener("DOMContentLoaded", inizializzaAperturaRisultati);
