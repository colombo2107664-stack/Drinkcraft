function inizializzaIngredienti() {
    const bottoneCopia = document.querySelector("[data-bottone-copia-ingredienti]");

    if (!bottoneCopia) {
        return;
    }

    bottoneCopia.addEventListener("click", copiaIngredienti);

    bottoneCopia.addEventListener("animationend", function () {
        bottoneCopia.classList.remove("animazione-click");
    });
}

function copiaIngredienti() {
    const bottoneCopia = document.querySelector("[data-bottone-copia-ingredienti]");
    const listaIngredienti = document.querySelector("[data-ingredienti]");
    const testoIngredienti = leggiTestoIngredienti(listaIngredienti);

    navigator.clipboard.writeText(testoIngredienti);

    bottoneCopia.classList.add("copiato");

    bottoneCopia.classList.remove("animazione-click");
    void bottoneCopia.offsetWidth;
    bottoneCopia.classList.add("animazione-click");
}

function leggiTestoIngredienti(listaIngredienti) {
    const righeIngredienti = listaIngredienti.querySelectorAll("li");
    const testi = [];

    righeIngredienti.forEach(function (rigaIngrediente) {
        const nome = rigaIngrediente.querySelector(".nome").textContent.trim();
        const quantita = rigaIngrediente.querySelector(".quantita").textContent.trim();

        testi.push(nome + " - " + quantita);
    });

    return testi.join("\n");
}

document.addEventListener("DOMContentLoaded", inizializzaIngredienti);