function inizializzaCountdownSfide() {
    const listaSfide = ottieniSfide();

    listaSfide.forEach(function (sfidaSelezionata) {
        aggiornaCountdown(sfidaSelezionata);
    });

    setInterval(function () {
        listaSfide.forEach(function (sfidaSelezionata) {
            aggiornaCountdown(sfidaSelezionata);
        });
    }, 1000);
}

function aggiornaCountdown(sfidaSelezionata) {
    const elementoCountdown = sfidaSelezionata.querySelector("[data-countdown-sfida]");
    const dataScadenza = creaDataScadenza(sfidaSelezionata.dataset.scadenza);
    const tempoRimanente = calcolaTempoRimanente(dataScadenza);

    if (!elementoCountdown) {
        return;
    }

    if (tempoRimanente.totale <= 0) {
        mostraSfidaTerminata(sfidaSelezionata, elementoCountdown);
        return;
    }

    elementoCountdown.textContent = formattaTempoRimanente(tempoRimanente);
}

function calcolaTempoRimanente(dataScadenza) {
    const totale = dataScadenza.getTime() - Date.now();
    const secondiTotali = Math.max(0, Math.floor(totale / 1000));
    const giorniRimanenti = Math.floor(secondiTotali / 86400);
    const oreRimanenti = Math.floor((secondiTotali % 86400) / 3600);
    const minutiRimanenti = Math.floor((secondiTotali % 3600) / 60);
    const secondiRimanenti = secondiTotali % 60;

    return {
        totale: totale,
        giorni: giorniRimanenti,
        ore: oreRimanenti,
        minuti: minutiRimanenti,
        secondi: secondiRimanenti
    };
}

function formattaTempoRimanente(tempoRimanente) {
    return tempoRimanente.giorni + "g " +
        tempoRimanente.ore + "h " +
        tempoRimanente.minuti + "m " +
        tempoRimanente.secondi + "s";
}

function mostraSfidaTerminata(sfidaSelezionata, elementoCountdown) {
    const linkPartecipa = sfidaSelezionata.querySelector(".bottoni a");
    const bottonePartecipa = linkPartecipa ? linkPartecipa.querySelector(".bottoniF") : null;

    elementoCountdown.textContent = "Sfida terminata";
    sfidaSelezionata.classList.add("sfida-terminata");

    if (bottonePartecipa) {
        bottonePartecipa.disabled = true;
        bottonePartecipa.classList.add("sfida-disabilitata");
        bottonePartecipa.textContent = "Terminata";
    }
}

document.addEventListener("DOMContentLoaded", inizializzaCountdownSfide);
