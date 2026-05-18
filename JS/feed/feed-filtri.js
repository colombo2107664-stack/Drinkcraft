function inizializzaFiltriFeed() {
    const pulsantiFiltro = document.querySelectorAll("[data-filtro-feed]");

    pulsantiFiltro.forEach(function (pulsanteFiltro) {
        pulsanteFiltro.addEventListener("click", function () {
            const filtroAttivo = pulsanteFiltro.dataset.filtroFeed;

            applicaFiltroFeed(filtroAttivo);
            aggiornaPulsanteAttivo(pulsanteFiltro);
        });
    });

    applicaFiltroFeed("tutti");
}

function applicaFiltroFeed(filtroAttivo) {
    statoFeed.filtroAttivo = filtroAttivo;
    statoFeed.quantitaVisibile = statoFeed.incremento;
    statoFeed.drinkFiltrati = ordinaFeed(filtroAttivo);

    aggiornaFeedVisibile();
}

function aggiornaPulsanteAttivo(pulsanteAttivo) {
    const pulsantiFiltro = document.querySelectorAll("[data-filtro-feed]");

    pulsantiFiltro.forEach(function (pulsanteFiltro) {
        pulsanteFiltro.classList.remove("Attivo");
    });

    pulsanteAttivo.classList.add("Attivo");
}

document.addEventListener("DOMContentLoaded", inizializzaFiltriFeed);
