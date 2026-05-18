let osservatoreScroll = null;

function inizializzaInfiniteScroll() {
    const elementoSentinella = document.querySelector("[data-sentinella-feed]");

    if (!elementoSentinella || !("IntersectionObserver" in window)) {
        return;
    }

    osservatoreScroll = new IntersectionObserver(function (elementiOsservati) {
        if (elementiOsservati[0].isIntersecting) {
            mostraProssimiDrink();
        }
    });

    osservatoreScroll.observe(elementoSentinella);
}

function aggiornaFeedVisibile() {
    nascondiTuttiDrink();

    const drinkDaMostrare = statoFeed.drinkFiltrati.slice(0, statoFeed.quantitaVisibile);

    drinkDaMostrare.forEach(function (drink) {
        drink.hidden = false;
    });

    mostraMessaggioFeedVuoto(statoFeed.drinkFiltrati.length === 0);
}

function mostraProssimiDrink() {
    if (statoFeed.quantitaVisibile >= statoFeed.drinkFiltrati.length) {
        return;
    }

    statoFeed.quantitaVisibile = statoFeed.quantitaVisibile + statoFeed.incremento;
    aggiornaFeedVisibile();
}

document.addEventListener("DOMContentLoaded", inizializzaInfiniteScroll);
