function inizializzaFiltriRicerca() {
    const filtroCategoria = document.querySelector("[data-filtro-categoria]");
    const filtroDifficolta = document.querySelector("[data-filtro-difficolta]");
    const filtroIngredienti = document.querySelector("[data-filtro-ingredienti]");

    collegaFiltroRicerca(filtroCategoria);
    collegaFiltroRicerca(filtroDifficolta);
    collegaFiltroRicerca(filtroIngredienti);
}

function collegaFiltroRicerca(filtroRicerca) {
    if (!filtroRicerca) {
        return;
    }

    filtroRicerca.addEventListener("input", applicaFiltriRicerca);
    filtroRicerca.addEventListener("change", applicaFiltriRicerca);
}

function applicaFiltriRicerca() {
    aggiornaRisultatiRicerca();
}

document.addEventListener("DOMContentLoaded", inizializzaFiltriRicerca);
