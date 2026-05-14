function formattaNumeroProfilo(numero) {
    if (numero >= 1000) {
        return (numero / 1000).toFixed(1).replace(".0", "") + "K";
    }

    return String(numero);
}

function leggiNumeroProfilo(testo) {
    const testoPulito = testo.trim().toUpperCase();

    if (testoPulito.includes("K")) {
        return Math.round(parseFloat(testoPulito) * 1000);
    }

    return parseInt(testoPulito, 10) || 0;
}

function animaElementoProfilo(elemento) {
    elemento.classList.remove("animazione-profilo");

    setTimeout(function () {
        elemento.classList.add("animazione-profilo");
    }, 10);
}
