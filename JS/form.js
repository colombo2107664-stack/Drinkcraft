document.addEventListener("DOMContentLoaded", function () {
    const inputImmagine = document.getElementById("Immagine");
    const preview = document.getElementById("anteprimaImmagine");
    const infoFile = document.getElementById("infoFile");
    const erroreFile = document.getElementById("erroreFile");
    const testoDefault = document.querySelector(".TestoImm");

    inputImmagine.addEventListener("change", function () {
        const file = this.files[0];

        preview.hidden = true;
        infoFile.hidden = true;
        erroreFile.hidden = true;
        erroreFile.textContent = "";

        if (!file) {
            testoDefault.textContent = "Carica immagine del drink";
            preview.removeAttribute("src");
            return;
        }

        if (!file.type.startsWith("image/")) {
            this.value = "";
            testoDefault.textContent = "Carica immagine del drink";
            preview.removeAttribute("src");

            erroreFile.textContent = "Il file selezionato non è un'immagine valida.";
            erroreFile.hidden = false;
            return;
        }

        const dimensioneKB = (file.size / 1024).toFixed(2);
        const urlImmagine = URL.createObjectURL(file);

        preview.src = urlImmagine;
        preview.hidden = false;

        testoDefault.textContent = file.name;
        infoFile.textContent = `Tipo: ${file.type} - Dimensione: ${dimensioneKB} KB`;
        infoFile.hidden = false;
    });
});