function inizializzaImmagineDrink() {
    const immagineDrink = document.querySelector("[data-immagine-drink]");

    if (!immagineDrink) {
        return;
    }

    const elementoOverlay = creaOverlayImmagine();

    immagineDrink.addEventListener("click", function () {
        apriOverlayImmagine(elementoOverlay, immagineDrink);
    });

    document.addEventListener("keydown", function (evento) {
        if (evento.key === "Escape") {
            chiudiOverlayImmagine(elementoOverlay);
        }
    });
}

function creaOverlayImmagine() {
    const elementoOverlay = document.createElement("div");
    const immagineGrande = document.createElement("img");
    const bottoneChiudi = document.createElement("button");

    elementoOverlay.className = "overlay-immagine";
    immagineGrande.alt = "Immagine drink ingrandita";
    bottoneChiudi.className = "chiudi-overlay";
    bottoneChiudi.type = "button";
    bottoneChiudi.textContent = "Chiudi";

    elementoOverlay.appendChild(immagineGrande);
    elementoOverlay.appendChild(bottoneChiudi);
    document.body.appendChild(elementoOverlay);

    elementoOverlay.addEventListener("click", function (evento) {
        if (evento.target === elementoOverlay) {
            chiudiOverlayImmagine(elementoOverlay);
        }
    });

    bottoneChiudi.addEventListener("click", function () {
        chiudiOverlayImmagine(elementoOverlay);
    });

    return elementoOverlay;
}

function apriOverlayImmagine(elementoOverlay, immagineDrink) {
    const immagineGrande = elementoOverlay.querySelector("img");

    immagineGrande.src = immagineDrink.src;
    immagineGrande.alt = immagineDrink.alt;
    elementoOverlay.classList.add("aperto");
}

function chiudiOverlayImmagine(elementoOverlay) {
    elementoOverlay.classList.remove("aperto");
}

document.addEventListener("DOMContentLoaded", inizializzaImmagineDrink);
