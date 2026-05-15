function inizializzaRimozioneSalvati() {
    const bottoniRimuovi = document.querySelectorAll("[data-bottone-rimuovi]");

    bottoniRimuovi.forEach(function (bottoneRimuovi) {
        bottoneRimuovi.addEventListener("click", function (evento) {
            evento.preventDefault();
            evento.stopPropagation();
            rimuoviDrinkSalvato(bottoneRimuovi);
        });
    });
}

function rimuoviDrinkSalvato(bottoneRimuovi) {
    const drinkSalvato = bottoneRimuovi.closest("[data-risultato-salvato]");

    if (!drinkSalvato) {
        return;
    }

    drinkSalvato.classList.add("rimozione-in-corso");

    setTimeout(function () {
        drinkSalvato.remove();
        aggiornaStatoVuoto();
    }, 200);
}

document.addEventListener("DOMContentLoaded", inizializzaRimozioneSalvati);
