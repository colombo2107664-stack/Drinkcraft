function inizializzaSuggerimenti() {
    const inputRicerca = ottieniInputRicerca();

    if (!inputRicerca) {
        return;
    }

    inputRicerca.addEventListener("input", function () {
        mostraSuggerimenti(inputRicerca.value);
    });
}

function mostraSuggerimenti(testoRicerca) {
    const contenitoreSuggerimenti = document.querySelector("[data-suggerimenti-ricerca]");

    if (!contenitoreSuggerimenti) {
        return;
    }

    contenitoreSuggerimenti.innerHTML = "";

    const testoNormalizzato = normalizzaTestoRicerca(testoRicerca);

    if (testoNormalizzato === "") {
        contenitoreSuggerimenti.classList.remove("visibile");
        return;
    }

    const suggerimentiDrink = ottieniSuggerimentiDrink(testoNormalizzato);

    suggerimentiDrink.forEach(function (nomeDrink) {
        contenitoreSuggerimenti.appendChild(creaBottoneSuggerimento(nomeDrink));
    });

    contenitoreSuggerimenti.classList.toggle("visibile", suggerimentiDrink.length > 0);
}

function ottieniSuggerimentiDrink(testoRicerca) {
    return ottieniRisultatiRicerca()
        .filter(function (risultatoRicerca) {
            return distinguiTipoRisultato(risultatoRicerca) === "drink";
        })
        .map(function (risultatoRicerca) {
            return risultatoRicerca.dataset.nome;
        })
        .filter(function (nomeDrink) {
            return normalizzaTestoRicerca(nomeDrink).includes(testoRicerca);
        })
        .slice(0, 4);
}

function creaBottoneSuggerimento(nomeDrink) {
    const bottoneSuggerimento = document.createElement("button");

    bottoneSuggerimento.type = "button";
    bottoneSuggerimento.className = "suggerimento-ricerca";
    bottoneSuggerimento.textContent = nomeDrink;

    bottoneSuggerimento.addEventListener("click", function () {
        const inputRicerca = ottieniInputRicerca();

        inputRicerca.value = nomeDrink;
        mostraSuggerimenti("");
        aggiornaRisultatiRicerca();
    });

    return bottoneSuggerimento;
}

document.addEventListener("DOMContentLoaded", inizializzaSuggerimenti);
