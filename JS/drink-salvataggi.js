function inizializzaSalvataggio() {
    const bottoneSalva = document.querySelector("[data-bottone-salva]");

    if (!bottoneSalva) {
        return;
    }

    bottoneSalva.addEventListener("click", function () {
        gestisciClickSalva(bottoneSalva);
    });
}

function gestisciClickSalva(bottoneSalva) {
    const salvato = bottoneSalva.getAttribute("aria-pressed") === "true";
    const nuovoStato = !salvato;

    aggiornaBottoneSalva(bottoneSalva, nuovoStato);
    attivaAnimazione(bottoneSalva);

    inviaSalvataggio(bottoneSalva, nuovoStato);
}

function aggiornaBottoneSalva(bottoneSalva, salvato) {
    bottoneSalva.classList.toggle("salvato", salvato);
    bottoneSalva.setAttribute("aria-pressed", salvato ? "true" : "false");
    bottoneSalva.textContent = salvato ? "Salvato" : "Salva";
}

function inviaSalvataggio(bottoneSalva, salvato) {
    const drinkId = ottieniDrinkId();
    const url = bottoneSalva.dataset.url;

    inviaRichiestaJson(url, {
        drinkId: drinkId,
        salvato: salvato
    }).catch(function () {
        console.log("Salvataggio simulato lato client");
    });
}

document.addEventListener("DOMContentLoaded", inizializzaSalvataggio);
