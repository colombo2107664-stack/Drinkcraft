const statoFeed = {
    filtroAttivo: "tutti",
    quantitaVisibile: 2,
    incremento: 2,
    drinkFiltrati: []
};

function recuperaDrinkDalDom() {
    return Array.from(document.querySelectorAll("[data-feed-drink]"));
}

function recuperaContenitoreFeed() {
    return document.querySelector("[data-contenitore-feed]");
}

function nascondiTuttiDrink() {
    const listaDrink = recuperaDrinkDalDom();

    listaDrink.forEach(function (drink) {
        drink.hidden = true;
    });
}

function mostraMessaggioFeedVuoto(mostraMessaggio) {
    const messaggioFeedVuoto = document.querySelector("[data-messaggio-feed-vuoto]");

    if (!messaggioFeedVuoto) {
        return;
    }

    messaggioFeedVuoto.hidden = !mostraMessaggio;
}

function leggiNumeroAttributo(elemento, nomeAttributo) {
    const valoreAttributo = elemento.dataset[nomeAttributo];

    return Number(valoreAttributo) || 0;
}
