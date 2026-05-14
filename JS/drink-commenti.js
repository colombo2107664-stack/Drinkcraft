function inizializzaCommenti() {
    const formCommento = document.querySelector("[data-form-commento]");

    if (!formCommento) {
        return;
    }

    formCommento.addEventListener("submit", function (evento) {
        evento.preventDefault();
        gestisciInvioCommento(formCommento);
    });
}

function gestisciInvioCommento(formCommento) {
    const campoCommento = formCommento.querySelector("[data-campo-commento]");
    const messaggioCommento = formCommento.querySelector("[data-messaggio-commento]");
    const testoCommento = campoCommento.value.trim();

    if (testoCommento === "") {
        messaggioCommento.textContent = "Scrivi un commento";
        return;
    }

    aggiungiCommentoInPagina(testoCommento, formCommento);
    campoCommento.value = "";
    messaggioCommento.textContent = "Commento aggiunto";

    inviaCommento(formCommento, testoCommento);
}

function aggiungiCommentoInPagina(testoCommento, formCommento) {
    const listaCommenti = document.querySelector("[data-lista-commenti]");
    const nuovoCommento = creaElementoCommento(testoCommento);

    listaCommenti.insertBefore(nuovoCommento, formCommento);
    attivaAnimazione(nuovoCommento);
}

function creaElementoCommento(testoCommento) {
    const commento = document.createElement("div");
    const paragrafo = document.createElement("p");
    const profiloPiccolo = document.createElement("div");
    const immagineProfilo = document.createElement("img");
    const dati = document.createElement("div");
    const nomeUtente = document.createElement("h4");
    const tempo = document.createElement("div");
    const testoTempo = document.createElement("span");

    commento.className = "commento";
    paragrafo.className = "testoCommento";
    paragrafo.textContent = testoCommento;

    profiloPiccolo.className = "profiloPiccolo";
    immagineProfilo.src = "/Immagini/giuliafreshmix.png";
    immagineProfilo.alt = "Foto_profilo";
    immagineProfilo.className = "Fotoprofilo";

    dati.className = "dati";
    nomeUtente.textContent = "Tu";
    tempo.className = "dati-tempo";
    testoTempo.textContent = "Ora";

    tempo.appendChild(testoTempo);
    dati.appendChild(nomeUtente);
    dati.appendChild(tempo);
    profiloPiccolo.appendChild(immagineProfilo);
    profiloPiccolo.appendChild(dati);
    commento.appendChild(paragrafo);
    commento.appendChild(profiloPiccolo);

    return commento;
}

function inviaCommento(formCommento, testoCommento) {
    const drinkId = ottieniDrinkId();
    const url = formCommento.dataset.url;

    inviaRichiestaJson(url, {
        drinkId: drinkId,
        testoCommento: testoCommento
    }).catch(function () {
        console.log("Commento simulato lato client");
    });
}

document.addEventListener("DOMContentLoaded", inizializzaCommenti);
