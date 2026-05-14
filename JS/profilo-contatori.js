function inizializzaContatori() {
    const contatoriProfilo = document.querySelectorAll("[data-contatore-profilo]");

    if (contatoriProfilo.length === 0) {
        return;
    }

    const osservatoreContatori = new IntersectionObserver(function (elementi) {
        elementi.forEach(function (elementoOsservato) {
            if (elementoOsservato.isIntersecting) {
                animaContatore(elementoOsservato.target);
                osservatoreContatori.unobserve(elementoOsservato.target);
            }
        });
    });

    contatoriProfilo.forEach(function (contatoreStatistiche) {
        osservatoreContatori.observe(contatoreStatistiche);
    });
}

function animaContatore(contatoreStatistiche) {
    const valoreFinale = parseInt(contatoreStatistiche.dataset.valoreFinale, 10);
    const durata = 900;
    const inizio = performance.now();

    function aggiornaNumero(tempoAttuale) {
        const tempoPassato = tempoAttuale - inizio;
        const progresso = Math.min(tempoPassato / durata, 1);
        const valoreCorrente = Math.round(valoreFinale * progresso);

        contatoreStatistiche.textContent = formattaNumeroProfilo(valoreCorrente);

        if (progresso < 1) {
            requestAnimationFrame(aggiornaNumero);
        }
    }

    requestAnimationFrame(aggiornaNumero);
}

document.addEventListener("DOMContentLoaded", inizializzaContatori);
