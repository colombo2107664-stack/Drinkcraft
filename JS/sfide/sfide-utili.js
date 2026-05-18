function ottieniSfide() {
    return Array.from(document.querySelectorAll("[data-sfida]"));
}

function creaDataScadenza(testoScadenza) {
    const dataIso = new Date(testoScadenza);

    if (!Number.isNaN(dataIso.getTime())) {
        return dataIso;
    }

    return creaDataDaTestoBreve(testoScadenza);
}

function creaDataDaTestoBreve(testoScadenza) {
    const parti = testoScadenza.trim().split(" ");
    const giorno = parseInt(parti[0], 10);
    const mese = ottieniNumeroMese(parti[1]);
    const oggi = new Date();
    let dataScadenza = new Date(oggi.getFullYear(), mese, giorno, 23, 59, 59);

    if (dataScadenza.getTime() < oggi.getTime()) {
        dataScadenza = new Date(oggi.getFullYear() + 1, mese, giorno, 23, 59, 59);
    }

    return dataScadenza;
}

function ottieniNumeroMese(nomeMese) {
    const mesi = {
        gen: 0,
        feb: 1,
        mar: 2,
        apr: 3,
        mag: 4,
        giu: 5,
        lug: 6,
        ago: 7,
        set: 8,
        ott: 9,
        nov: 10,
        dic: 11
    };

    return mesi[nomeMese.toLowerCase()] || 0;
}
