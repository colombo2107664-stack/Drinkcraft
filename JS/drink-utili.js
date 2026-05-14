function ottieniDrinkId() {
    const contenitoreDrink = document.querySelector("[data-drink-id]");

    if (!contenitoreDrink) {
        return "";
    }

    return contenitoreDrink.dataset.drinkId;
}

function ottieniDrinkIdDaElemento(elemento) {
    const contenitoreDrink = elemento.closest("[data-drink-id]");

    if (!contenitoreDrink) {
        return ottieniDrinkId();
    }

    return contenitoreDrink.dataset.drinkId;
}

function attivaAnimazione(elemento) {
    if (!elemento) {
        return;
    }

    elemento.classList.remove("animazione-click");

    setTimeout(function () {
        elemento.classList.add("animazione-click");
    }, 10);
}

function inviaRichiestaJson(url, dati) {
    if (!url) {
        return Promise.reject("Backend non configurato");
    }

    return fetch(url, {
        method: "POST",
        headers: {
            "Content-Type": "application/json"
        },
        body: JSON.stringify(dati)
    }).then(function (risposta) {
        if (!risposta.ok) {
            throw new Error("Errore richiesta");
        }

        return risposta.json();
    });
}
