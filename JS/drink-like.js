function inizializzaLike() {
    const bottoniLike = document.querySelectorAll("[data-bottone-like]");

    if (bottoniLike.length === 0) {
        return;
    }

    bottoniLike.forEach(function (bottoneLike) {
        bottoneLike.addEventListener("click", function (evento) {
            evento.preventDefault();
            evento.stopPropagation();
            gestisciClickLike(bottoneLike);
        });

        bottoneLike.addEventListener("keydown", function (evento) {
            if (evento.key === "Enter" || evento.key === " ") {
                evento.preventDefault();
                evento.stopPropagation();
                gestisciClickLike(bottoneLike);
            }
        });
    });
}

function gestisciClickLike(bottoneLike) {
    const contatoreLike = bottoneLike.querySelector("[data-contatore-like]");
    const likeAttivo = bottoneLike.getAttribute("aria-pressed") === "true";
    const nuovoStato = !likeAttivo;

    aggiornaLikeInPagina(bottoneLike, contatoreLike, nuovoStato);
    attivaAnimazione(bottoneLike);

    inviaLike(bottoneLike, nuovoStato, contatoreLike);
}

function aggiornaLikeInPagina(bottoneLike, contatoreLike, likeAttivo) {
    const valoreAttuale = parseInt(contatoreLike.textContent, 10);
    const nuovoValore = likeAttivo ? valoreAttuale + 1 : valoreAttuale - 1;

    bottoneLike.classList.toggle("like-attivo", likeAttivo);
    bottoneLike.setAttribute("aria-pressed", likeAttivo ? "true" : "false");
    contatoreLike.textContent = Math.max(0, nuovoValore);
}

function inviaLike(bottoneLike, likeAttivo, contatoreLike) {
    const drinkId = ottieniDrinkIdDaElemento(bottoneLike);
    const url = bottoneLike.dataset.url;

    inviaRichiestaJson(url, {
        drinkId: drinkId,
        likeAttivo: likeAttivo,
        numeroLikeAttuale: parseInt(contatoreLike.textContent, 10)
    }).then(function (dati) {
        if (dati.numeroLike !== undefined) {
            contatoreLike.textContent = dati.numeroLike;
        }
    }).catch(function () {
        console.log("Like simulato lato client");
    });
}

document.addEventListener("DOMContentLoaded", inizializzaLike);
