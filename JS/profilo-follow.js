function inizializzaFollowProfilo() {
    const bottoneFollow = document.querySelector("[data-bottone-follow]");

    if (!bottoneFollow) {
        return;
    }

    bottoneFollow.addEventListener("click", function () {
        gestisciClickFollow(bottoneFollow);
    });
}

function gestisciClickFollow(bottoneFollow) {
    const seguito = bottoneFollow.getAttribute("aria-pressed") === "true";
    const nuovoStato = !seguito;

    aggiornaBottoneFollow(bottoneFollow, nuovoStato);
    aggiornaContatoreFollower(nuovoStato);
    animaElementoProfilo(bottoneFollow);
}

function aggiornaBottoneFollow(bottoneFollow, seguito) {
    bottoneFollow.classList.toggle("seguito", seguito);
    bottoneFollow.setAttribute("aria-pressed", seguito ? "true" : "false");
    bottoneFollow.textContent = seguito ? "Seguito" : "Segui";
}

function aggiornaContatoreFollower(seguito) {
    const contatoreFollower = document.querySelector("[data-contatore-follower]");

    if (!contatoreFollower) {
        return;
    }

    const valoreAttuale = leggiNumeroProfilo(contatoreFollower.textContent);
    const nuovoValore = seguito ? valoreAttuale + 1 : valoreAttuale - 1;
    const valoreSicuro = Math.max(0, nuovoValore);

    contatoreFollower.dataset.valoreFinale = valoreSicuro;
    contatoreFollower.textContent = formattaNumeroProfilo(valoreSicuro);
}

document.addEventListener("DOMContentLoaded", inizializzaFollowProfilo);
