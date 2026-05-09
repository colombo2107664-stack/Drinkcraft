<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina=" Crea il tuo drink";
    $StilePagina= $stile["creaDrink"];
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            
        <div class="riquadroSfondo">
            <div class="sezioneTesto">
            <img src="../Immagini/aggiungi_drink.png" alt="Aggiungi Drink">    
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
                
                
                
                
                
                          
                
                <button class="annulla" type="delete"> <img src="../Immagini/Annulla.png"> Annulla </button>
                <button class="inviato" type="submit"> <img src="../Immagini/iconaAccedi.png"> Pubblica </button>

            </form>

            
        </div>
        </div>
            
        </body>

</html>

