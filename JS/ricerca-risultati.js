function aggiornaRisultatiRicerca() {
    const inputRicerca = ottieniInputRicerca();
    const testoRicerca = inputRicerca ? normalizzaTestoRicerca(inputRicerca.value) : "";
    const risultatiRicerca = ottieniRisultatiRicerca();
    const filtroCategoria = leggiValoreCampo("[data-filtro-categoria]");
    const filtroDifficolta = leggiValoreCampo("[data-filtro-difficolta]");
    const filtroIngredienti = leggiValoreCampo("[data-filtro-ingredienti]");

    risultatiRicerca.forEach(function (risultatoRicerca) {
        const visibile = risultatoRispettaFiltri(
            risultatoRicerca,
            testoRicerca,
            filtroCategoria,
            filtroDifficolta,
            filtroIngredienti
        );

        risultatoRicerca.classList.toggle("nascosto", !visibile);
    });

    aggiornaMessaggioVuotoRicerca();
}

function risultatoRispettaFiltri(risultatoRicerca, testoRicerca, filtroCategoria, filtroDifficolta, filtroIngredienti) {
    const testoRisultato = creaTestoRisultatoRicerca(risultatoRicerca);
    const categoriaRisultato = normalizzaTestoRicerca(risultatoRicerca.dataset.categoria);
    const difficoltaRisultato = normalizzaTestoRicerca(risultatoRicerca.dataset.difficolta);
    const ingredientiRisultato = normalizzaTestoRicerca(risultatoRicerca.dataset.ingredienti);

    const passaTesto = testoRicerca === "" || testoRisultato.includes(testoRicerca);
    const passaCategoria = filtroCategoria === "" || categoriaRisultato === filtroCategoria;
    const passaDifficolta = filtroDifficolta === "" || difficoltaRisultato === filtroDifficolta;
    const passaIngredienti = filtroIngredienti === "" || ingredientiRisultato.includes(filtroIngredienti);

    return passaTesto && passaCategoria && passaDifficolta && passaIngredienti;
}

function aggiornaMessaggioVuotoRicerca() {
    const messaggioVuoto = document.querySelector("[data-messaggio-ricerca-vuota]");
    const risultatiVisibili = ottieniRisultatiRicerca().filter(function (risultatoRicerca) {
        return !risultatoRicerca.classList.contains("nascosto");
    });

    if (!messaggioVuoto) {
        return;
    }

    messaggioVuoto.classList.toggle("visibile", risultatiVisibili.length === 0);
}

function distinguiTipoRisultato(risultatoRicerca) {
    return risultatoRicerca.dataset.tipo;
}
