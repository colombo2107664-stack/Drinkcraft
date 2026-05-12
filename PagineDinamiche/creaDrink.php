<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina=" Crea il tuo drink";
    $StilePagina= $stile["creaDrink"];
?>

<!DOCTYPE html>
<html lang="it">
    <script src="<?= $stile["creaDrink"]?>"></script>
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            
        <div class="riquadroSfondo">
            <div class="sezioneTesto">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-fading-plus-icon lucide-circle-fading-plus"><path d="M12 2a10 10 0 0 1 7.38 16.75"/><path d="M12 8v8"/><path d="M16 12H8"/><path d="M2.5 8.875a10 10 0 0 0-.5 3"/><path d="M2.83 16a10 10 0 0 0 2.43 3.4"/><path d="M4.636 5.235a10 10 0 0 1 .891-.857"/><path d="M8.644 21.42a10 10 0 0 0 7.631-.38"/></svg>
    
            <h1>Nuovo Drink</h1>
            <h4>Condividi la tua creazione e lascia che gli altri la migliorino</h4>
            </div>

            <div class="sezioneForm">
            <form class= "posForm" action="/invia" method="post">
                
                <div class="campoTesto">
                <label for="nomeDrink"> Nome del tuo Drink</label>
                <input type="text" id="nomeDrink" name="NomeDrink" placeholder="Dai un nome al tuo drink..." required > 
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
        
                    <input type="file" id="Immagine" name="Immagine" accept="image/*" required>
                    </label>
                    </div>

                <div class="campoIngredienti">
                <label for="Ingredienti"> Ingredienti</label>
                <label for="quantita">Quantità</label>
                
                <input type="text" id="Ingredienti" name="Ingredienti" placeholder="Es. Gin" required> 
                <input type="text" id="quantita" name="quantita" placeholder="30ml"required > 

                <button type="button" > 
                    <span class="AggiungiPass"> + </span>  
                    Aggiungi Ingrediente</button>
                </div>



                <div class="campoPreparazione">
                <label>Preparazione</label>
                <input type="text" id="Preparazione" name="Preparazione" placeholder="Es. 20 minuti" required>

                <button type="button" > 
                    <span class="AggiungiPass"> + </span> 
                    Aggiungi passaggio </button>
                </div>
                
                
                
                
                
                          
                
                <button class="annulla" type="reset"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-undo2-icon lucide-undo-2"><path d="M9 14 4 9l5-5"/><path d="M4 9h10.5a5.5 5.5 0 0 1 5.5 5.5a5.5 5.5 0 0 1-5.5 5.5H11"/></svg> Annulla </button>
                <button class="inviato" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-arrow-right-icon lucide-circle-arrow-right"><circle cx="12" cy="12" r="10"/><path d="m12 16 4-4-4-4"/><path d="M8 12h8"/></svg> Pubblica </button>

            </form>

            
        </div>
        </div>
            
        </body>

</html>

