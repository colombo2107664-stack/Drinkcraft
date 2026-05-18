function apriPopupPartecipazione(popupPartecipazione) {
    if (!popupPartecipazione) {
        return;
    }

    popupPartecipazione.classList.add("aperto");
}

function chiudiPopupPartecipazione(popupPartecipazione) {
    if (!popupPartecipazione) {
        return;
    }

    popupPartecipazione.classList.remove("aperto");
}

function inizializzaChiusuraPopupPartecipazione() {
    const bottoniChiudiPopup = document.querySelectorAll("[data-chiudi-popup]");
    const popupPartecipazione = document.querySelectorAll(".popup-partecipazione");

    bottoniChiudiPopup.forEach(function (bottoneChiudiPopup) {
        bottoneChiudiPopup.addEventListener("click", function () {
            const popupDaChiudere = bottoneChiudiPopup.closest(".popup-partecipazione");
            chiudiPopupPartecipazione(popupDaChiudere);
        });
    });

    popupPartecipazione.forEach(function (popupSingolo) {
        popupSingolo.addEventListener("click", function (evento) {
            if (evento.target === popupSingolo) {
                chiudiPopupPartecipazione(popupSingolo);
            }
        });
    });

    document.addEventListener("keydown", function (evento) {
        if (evento.key === "Escape") {
            chiudiTuttiPopupPartecipazione();
        }
    });
}

function chiudiTuttiPopupPartecipazione() {
    const popupAperti = document.querySelectorAll(".popup-partecipazione.aperto");

    popupAperti.forEach(function (popupSingolo) {
        chiudiPopupPartecipazione(popupSingolo);
    });
}

document.addEventListener("DOMContentLoaded", inizializzaChiusuraPopupPartecipazione);
