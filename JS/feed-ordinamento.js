function inizializzaPosizioneOriginaleFeed() {
    const listaDrink = recuperaDrinkDalDom();

    listaDrink.forEach(function (drink, indice) {
        drink.dataset.posizioneOriginale = indice;
    });
}

function ordinaFeed(criterioCorrente) {
    const listaDrink = recuperaDrinkDalDom();
    let drinkOrdinati = filtraDrinkPerCriterio(listaDrink, criterioCorrente);

    drinkOrdinati.sort(function (primoDrink, secondoDrink) {
        if (criterioCorrente === "popolari") {
            return leggiNumeroAttributo(secondoDrink, "popolarita") - leggiNumeroAttributo(primoDrink, "popolarita");
        }

        if (criterioCorrente === "recenti") {
            return leggiNumeroAttributo(secondoDrink, "recenza") - leggiNumeroAttributo(primoDrink, "recenza");
        }

        return leggiNumeroAttributo(primoDrink, "posizioneOriginale") - leggiNumeroAttributo(secondoDrink, "posizioneOriginale");
    });

    spostaDrinkNelFeed(drinkOrdinati);

    return drinkOrdinati;
}

function filtraDrinkPerCriterio(listaDrink, criterioCorrente) {
    if (criterioCorrente === "popolari") {
        return listaDrink.filter(function (drink) {
            return leggiNumeroAttributo(drink, "popolarita") >= 250;
        });
    }

    if (criterioCorrente === "recenti") {
        return listaDrink.filter(function (drink) {
            return leggiNumeroAttributo(drink, "recenza") >= 900;
        });
    }

    return listaDrink;
}

function spostaDrinkNelFeed(drinkOrdinati) {
    const contenitoreFeed = recuperaContenitoreFeed();
    const messaggioFeedVuoto = document.querySelector("[data-messaggio-feed-vuoto]");

    drinkOrdinati.forEach(function (drink) {
        contenitoreFeed.insertBefore(drink, messaggioFeedVuoto);
    });
}

document.addEventListener("DOMContentLoaded", inizializzaPosizioneOriginaleFeed);
