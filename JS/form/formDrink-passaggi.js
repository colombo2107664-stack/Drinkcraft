function inizializzaPassaggiDinamici() {
    const listaPassaggi = document.querySelector("[data-lista-passaggi]");
    const bottoneAggiungiPassaggio = document.querySelector("[data-aggiungi-passaggio]");

    if (!listaPassaggi || !bottoneAggiungiPassaggio) {
        return;
    }

    preparaPrimoPassaggio(listaPassaggi);

    bottoneAggiungiPassaggio.addEventListener("click", function () {
        aggiungiPassaggio();
    });
}

function preparaPrimoPassaggio(listaPassaggi) {
    const inputPassaggio = listaPassaggi.querySelector("[data-passaggio-testo]");

    if (!inputPassaggio || inputPassaggio.closest("[data-riga-passaggio]")) {
        return;
    }

    const rigaPassaggio = creaRigaPassaggio(inputPassaggio.value);

    inputPassaggio.remove();
    listaPassaggi.insertBefore(rigaPassaggio, document.querySelector("[data-aggiungi-passaggio]"));
    aggiornaNumerazionePassaggi();
}

function aggiungiPassaggio(testoPassaggio) {
    const listaPassaggi = document.querySelector("[data-lista-passaggi]");
    const bottoneAggiungiPassaggio = document.querySelector("[data-aggiungi-passaggio]");
    const rigaPassaggio = creaRigaPassaggio(testoPassaggio);

    listaPassaggi.insertBefore(rigaPassaggio, bottoneAggiungiPassaggio);
    aggiornaNumerazionePassaggi();
    segnalaModificaForm();
}

function creaRigaPassaggio(testoPassaggio) {
    const rigaPassaggio = creaElemento("div", "rigaPassaggio");
    const numeroPassaggio = creaElemento("span", "numeroPassaggio");
    const inputPassaggio = document.createElement("input");
    const bottoneRimuovi = creaElemento("button", "btnRimuovi", "Rimuovi");

    rigaPassaggio.dataset.rigaPassaggio = "";

    inputPassaggio.type = "text";
    inputPassaggio.name = "Preparazione[]";
    inputPassaggio.placeholder = "Descrivi il passaggio...";
    inputPassaggio.required = true;
    inputPassaggio.dataset.passaggioTesto = "";
    inputPassaggio.value = testoPassaggio || "";

    bottoneRimuovi.type = "button";
    bottoneRimuovi.addEventListener("click", function () {
        rimuoviPassaggio(rigaPassaggio);
    });

    rigaPassaggio.appendChild(numeroPassaggio);
    rigaPassaggio.appendChild(inputPassaggio);
    rigaPassaggio.appendChild(bottoneRimuovi);

    return rigaPassaggio;
}

function rimuoviPassaggio(rigaPassaggio) {
    const passaggi = document.querySelectorAll("[data-riga-passaggio]");

    if (passaggi.length <= 1) {
        mostraErroreForm("Deve esserci almeno un passaggio di preparazione.");
        return;
    }

    rigaPassaggio.remove();
    aggiornaNumerazionePassaggi();
    segnalaModificaForm();
}

function aggiornaNumerazionePassaggi() {
    const passaggi = document.querySelectorAll("[data-riga-passaggio]");

    passaggi.forEach(function (rigaPassaggio, indice) {
        const numeroPassaggio = rigaPassaggio.querySelector(".numeroPassaggio");
        const inputPassaggio = rigaPassaggio.querySelector("[data-passaggio-testo]");

        numeroPassaggio.textContent = (indice + 1) + ".";
        inputPassaggio.placeholder = "Passaggio " + (indice + 1) + "...";
    });
}

document.addEventListener("DOMContentLoaded", inizializzaPassaggiDinamici);
