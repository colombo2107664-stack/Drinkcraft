function inizializzaPaginaAttiva() {
    const listaCollegamenti = document.querySelectorAll("[data-navbar-link]");

    if (listaCollegamenti.length === 0) {
        return;
    }

    evidenziaPaginaCorrente(listaCollegamenti);
}

function evidenziaPaginaCorrente(listaCollegamenti) {
    const percorsoCorrente = normalizzaPercorso(window.location.pathname);

    listaCollegamenti.forEach(function (linkNavbar) {
        const percorsiValidi = ottieniPercorsiLink(linkNavbar);

        if (percorsiValidi.includes(percorsoCorrente)) {
            impostaCollegamentoAttivo(linkNavbar);
        }
    });
}

function ottieniPercorsiLink(linkNavbar) {
    const percorsiDaAttributo = dividiPercorsiNavbar(linkNavbar.dataset.pagineAttive);

    if (percorsiDaAttributo.length > 0) {
        return percorsiDaAttributo;
    }

    return [normalizzaPercorso(linkNavbar.getAttribute("href"))];
}

function impostaCollegamentoAttivo(linkNavbar) {
    const bottoneNavbar = linkNavbar.querySelector(".bottoneT");

    linkNavbar.classList.add("navbar-attivo");
    linkNavbar.setAttribute("aria-current", "page");

    if (bottoneNavbar) {
        bottoneNavbar.classList.add("navbar-attivo");
    }
}

document.addEventListener("DOMContentLoaded", inizializzaPaginaAttiva);
