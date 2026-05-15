function normalizzaPercorso(percorso) {
    const linkTemporaneo = document.createElement("a");
    linkTemporaneo.href = percorso;

    return linkTemporaneo.pathname.replace(/\/+$/, "");
}

function dividiPercorsiNavbar(testoPercorsi) {
    if (!testoPercorsi) {
        return [];
    }

    return testoPercorsi.split(",").map(function (percorso) {
        return normalizzaPercorso(percorso.trim());
    });
}
