function inizializzaOrdinamentoSalvati() {
    const selettoreOrdinamento = document.querySelector("[data-selettore-ordinamento]");

    if (!selettoreOrdinamento) {
        return;
    }

    selettoreOrdinamento.addEventListener("change", function () {
        ordinaDrinkSalvati(selettoreOrdinamento.value);
    });
}

function ordinaDrinkSalvati(criterioOrdinamento) {
    const listaSalvati = ottieniListaSalvati();
    const risultatiSalvati = ottieniRisultatiSalvati();

    if (!listaSalvati) {
        return;
    }

    risultatiSalvati.sort(function (primoRisultato, secondoRisultato) {
        return confrontaRisultati(primoRisultato, secondoRisultato, criterioOrdinamento);
    });

    risultatiSalvati.forEach(function (risultatoSalvato) {
        listaSalvati.appendChild(risultatoSalvato);
    });
}

function confrontaRisultati(primoRisultato, secondoRisultato, criterioOrdinamento) {
    if (criterioOrdinamento === "popolarita" || criterioOrdinamento === "data") {
        return Number(secondoRisultato.dataset[criterioOrdinamento]) - Number(primoRisultato.dataset[criterioOrdinamento]);
    }

    return primoRisultato.dataset.categoria.localeCompare(secondoRisultato.dataset.categoria);
}

document.addEventListener("DOMContentLoaded", inizializzaOrdinamentoSalvati);
