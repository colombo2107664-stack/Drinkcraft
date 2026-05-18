document.addEventListener("DOMContentLoaded", function () {

    // =============================================
    // ANTEPRIMA IMMAGINE
    // =============================================
    const inputImmagine = document.getElementById("Immagine");
    const preview = document.getElementById("anteprimaImmagine");
    const infoFile = document.getElementById("infoFile");
    const erroreFile = document.getElementById("erroreFile");
    const testoDefault = document.querySelector(".TestoImm");
    const iconaDefault = document.querySelector(".IconaImm");

    if (inputImmagine) {
        inputImmagine.addEventListener("change", function () {
            const file = this.files[0];

            if (preview) preview.hidden = true;
            if (infoFile) infoFile.hidden = true;
            if (erroreFile) { erroreFile.hidden = true; erroreFile.textContent = ""; }

            if (!file) {
                if (testoDefault) { testoDefault.hidden = false; }
                if (iconaDefault) { iconaDefault.hidden = false; }
                if (preview) preview.removeAttribute("src");
                return;
            }

            if (!file.type.startsWith("image/")) {
                this.value = "";
                if (testoDefault) { testoDefault.hidden = false; }
                if (iconaDefault) { iconaDefault.hidden = false; }
                if (preview) preview.removeAttribute("src");

                if (erroreFile) {
                    erroreFile.textContent = "Il file selezionato non è un'immagine valida.";
                    erroreFile.hidden = false;
                }
                return;
            }

            const urlImmagine = URL.createObjectURL(file);

            if (preview) {
                preview.src = urlImmagine;
                preview.hidden = false;
            }

            if (testoDefault) { testoDefault.hidden = true; }
            if (iconaDefault) { iconaDefault.hidden = true; }

            if (infoFile) {
                const dimensioneKB = (file.size / 1024).toFixed(2);
                infoFile.textContent = `${dimensioneKB} KB`;
                infoFile.hidden = true;
            }
        });
    }

    // =============================================
    // AGGIUNTA DINAMICA INGREDIENTI
    // =============================================
    const campoIngredienti = document.querySelector(".campoIngredienti");

    if (campoIngredienti) {
        const btnAggiungiIngrediente = campoIngredienti.querySelector("button");
        let contatorIngredienti = 1;

        btnAggiungiIngrediente.addEventListener("click", function () {
            contatorIngredienti++;

            const riga = document.createElement("div");
            riga.classList.add("rigaIngrediente");

            const inputNome = document.createElement("input");
            inputNome.type = "text";
            inputNome.name = "Ingredienti[]";
            inputNome.placeholder = "Es. Vodka";
            inputNome.required = true;

            const inputQuantita = document.createElement("input");
            inputQuantita.type = "text";
            inputQuantita.name = "quantita[]";
            inputQuantita.placeholder = "50ml";
            inputQuantita.required = true;

            const btnRimuovi = document.createElement("button");
            btnRimuovi.type = "button";
            btnRimuovi.classList.add("btnRimuovi");
            btnRimuovi.innerHTML = '<span class="AggiungiPass"> − </span> Rimuovi';
            btnRimuovi.addEventListener("click", function () {
                riga.remove();
            });

            riga.appendChild(inputNome);
            riga.appendChild(inputQuantita);
            riga.appendChild(btnRimuovi);

            // Inserisco la nuova riga prima del bottone "Aggiungi Ingrediente"
            campoIngredienti.insertBefore(riga, btnAggiungiIngrediente);
        });
    }

    // =============================================
    // AGGIUNTA DINAMICA PASSAGGI PREPARAZIONE
    // =============================================
    const campoPreparazione = document.querySelector(".campoPreparazione");

    if (campoPreparazione) {
        const btnAggiungiPassaggio = campoPreparazione.querySelector("button");
        let contatorPassaggi = 1;

        btnAggiungiPassaggio.addEventListener("click", function () {
            contatorPassaggi++;

            const riga = document.createElement("div");
            riga.classList.add("rigaPassaggio");

            const numero = document.createElement("span");
            numero.classList.add("numeroPassaggio");
            numero.textContent = contatorPassaggi + ".";

            const inputPassaggio = document.createElement("input");
            inputPassaggio.type = "text";
            inputPassaggio.name = "Preparazione[]";
            inputPassaggio.placeholder = "Passaggio " + contatorPassaggi + "...";
            inputPassaggio.required = true;

            const btnRimuovi = document.createElement("button");
            btnRimuovi.type = "button";
            btnRimuovi.classList.add("btnRimuovi");
            btnRimuovi.innerHTML = '<span class="AggiungiPass"> − </span> Rimuovi';
            btnRimuovi.addEventListener("click", function () {
                riga.remove();
                rinumeraPassaggi();
            });

            riga.appendChild(numero);
            riga.appendChild(inputPassaggio);
            riga.appendChild(btnRimuovi);

            campoPreparazione.insertBefore(riga, btnAggiungiPassaggio);
        });

        function rinumeraPassaggi() {
            const righe = campoPreparazione.querySelectorAll(".rigaPassaggio");
            righe.forEach(function (riga, index) {
                const num = riga.querySelector(".numeroPassaggio");
                if (num) num.textContent = (index + 2) + ".";
                const input = riga.querySelector("input");
                if (input) input.placeholder = "Passaggio " + (index + 2) + "...";
            });
            contatorPassaggi = righe.length + 1;
        }
    }

});
