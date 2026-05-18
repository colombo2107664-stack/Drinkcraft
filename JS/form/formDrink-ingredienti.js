function inizializzaIngredientiDinamici() {
    const listaIngredienti = document.querySelector("[data-lista-ingredienti]");
    const bottoneAggiungiIngrediente = document.querySelector("[data-aggiungi-ingrediente]");

    if (!listaIngredienti || !bottoneAggiungiIngrediente) {
        return;
    }

    preparaPrimoIngrediente(listaIngredienti);

    bottoneAggiungiIngrediente.addEventListener("click", function () {
        aggiungiIngrediente();
    });
}

function preparaPrimoIngrediente(listaIngredienti) {
    const nomeIngrediente = listaIngredienti.querySelector("[data-ingrediente-nome]");
    const quantitaIngrediente = listaIngredienti.querySelector("[data-ingrediente-quantita]");

    if (!nomeIngrediente || nomeIngrediente.closest("[data-riga-ingrediente]")) {
        return;
    }

    const rigaIngrediente = creaRigaIngrediente(nomeIngrediente.value, quantitaIngrediente.value);

    nomeIngrediente.remove();
    quantitaIngrediente.remove();
    listaIngredienti.insertBefore(rigaIngrediente, document.querySelector("[data-aggiungi-ingrediente]"));
}

function aggiungiIngrediente(nomeIngrediente, quantitaIngrediente) {
    const listaIngredienti = document.querySelector("[data-lista-ingredienti]");
    const bottoneAggiungiIngrediente = document.querySelector("[data-aggiungi-ingrediente]");
    const rigaIngrediente = creaRigaIngrediente(nomeIngrediente, quantitaIngrediente);

    listaIngredienti.insertBefore(rigaIngrediente, bottoneAggiungiIngrediente);
    segnalaModificaForm();
}

function creaRigaIngrediente(nomeIngrediente, quantitaIngrediente) {
    const rigaIngrediente = creaElemento("div", "rigaIngrediente");
    const inputNome = document.createElement("input");
    const inputQuantita = document.createElement("input");
    const bottoneRimuovi = creaElemento("button", "btnRimuovi", "Rimuovi");

    rigaIngrediente.dataset.rigaIngrediente = "";

    inputNome.type = "text";
    inputNome.name = "Ingredienti[]";
    inputNome.placeholder = "Es. Gin";
    inputNome.required = true;
    inputNome.dataset.ingredienteNome = "";
    inputNome.value = nomeIngrediente || "";

    inputQuantita.type = "text";
    inputQuantita.name = "quantita[]";
    inputQuantita.placeholder = "30ml";
    inputQuantita.required = true;
    inputQuantita.dataset.ingredienteQuantita = "";
    inputQuantita.value = quantitaIngrediente || "";

    bottoneRimuovi.type = "button";
    bottoneRimuovi.addEventListener("click", function () {
        rimuoviIngrediente(rigaIngrediente);
    });

    rigaIngrediente.appendChild(inputNome);
    rigaIngrediente.appendChild(inputQuantita);
    rigaIngrediente.appendChild(bottoneRimuovi);

    return rigaIngrediente;
}

function rimuoviIngrediente(rigaIngrediente) {
    const ingredienti = document.querySelectorAll("[data-riga-ingrediente]");

    if (ingredienti.length <= 1) {
        mostraErroreForm("Deve esserci almeno un ingrediente.");
        return;
    }

    rigaIngrediente.remove();
    segnalaModificaForm();
}

document.addEventListener("DOMContentLoaded", inizializzaIngredientiDinamici);
