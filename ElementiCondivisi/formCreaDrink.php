<form class="posForm" action="/invia" method="post" enctype="multipart/form-data" data-form-drink data-chiave-salvataggio="drinkcraft-crea-drink-temporaneo">
                
    <div class="campoTesto">
    <label for="nomeDrink"> Nome del tuo Drink</label>
    <input type="text" id="nomeDrink" name="NomeDrink" placeholder="Dai un nome al tuo drink..." minlength="3" maxlength="60" required data-campo-nome-drink> 
    </div>

    <div class="campoCategoria">
    <span><label>Categoria</label></span>

    <div>
        <label>
        <input type="radio" id="analcolico" name="Categoria" value="analcolico" required>
        <label for="analcolico" class="Opzionebottone">Analcolico</label>

        <input type="radio" id="alcolico" name="Categoria" value="alcolico">
        <label for="alcolico" class="Opzionebottone">Alcolico</label>

    </div>
    </div>

    <div class="campoDifficolta">
    <span><label>Difficoltà</label></span>

    <div>
        <input type="radio" id="facile" name="Difficolta" value="facile" required>
        <label for="facile" class="Opzionebottone">Facile</label>

        <input type="radio" id="media" name="Difficolta" value="media">
        <label for="media" class="Opzionebottone">Media</label>

        <input type="radio" id="difficile" name="Difficolta" value="difficile">
        <label for="difficile" class="Opzionebottone">Difficile</label>
    </div>
    </div> 

    <div class="campoImmagine">
        <label for="Immagine" class=" spazioImmagine">
        <span class="IconaImm"> + </span>
        <span class="TestoImm">Carica immagine del drink</span>

        <img id="anteprimaImmagine" alt="Anteprima drink" hidden>
            <p id="infoFile" hidden></p>
            <p id="erroreFile" hidden></p>

        <input type="file" id="Immagine" name="Immagine" accept="image/*" data-campo-immagine-drink>
        </label>
        </div>

    <div class="campoIngredienti" data-lista-ingredienti>
    <label for="Ingredienti"> Ingredienti e Quantità</label>

    
    <input type="text" id="Ingredienti" name="Ingredienti[]" placeholder="Es. Gin" required data-ingrediente-nome> 
    <input type="text" id="quantita" name="quantita[]" placeholder="30ml"required data-ingrediente-quantita> 

    <button type="button" data-aggiungi-ingrediente> 
        <span class="AggiungiPass"> + </span>  
        Aggiungi Ingrediente</button>
    </div>



    <div class="campoPreparazione" data-lista-passaggi>
    <label>Preparazione</label>
    <input type="text" id="Preparazione" name="Preparazione[]" placeholder="Es. 20 minuti" required data-passaggio-testo>

    <button type="button" data-aggiungi-passaggio> 
        <span class="AggiungiPass"> + </span> 
        Aggiungi passaggio </button>
    </div>
    
    
    
    
    
              
    
    <p class="messaggio-validazione" data-messaggio-validazione hidden></p>
    <button class="annulla" type="reset" data-bottone-annulla> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-undo2-icon lucide-undo-2"><path d="M9 14 4 9l5-5"/><path d="M4 9h10.5a5.5 5.5 0 0 1 5.5 5.5a5.5 5.5 0 0 1-5.5 5.5H11"/></svg> Annulla </button>
    <button class="inviato" type="submit" data-pulsante-pubblica disabled> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-arrow-right-icon lucide-circle-arrow-right"><circle cx="12" cy="12" r="10"/><path d="m12 16 4-4-4-4"/><path d="M8 12h8"/></svg> Pubblica </button>

</form>
