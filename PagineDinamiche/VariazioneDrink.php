<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina=" Crea la tua variante";
    $StilePagina= $stile["VariazioneDrink"];

    $drinkOriginale = [
        "nome" => "Negroni",
        "descrizione" => "Versione originale con gin, Campari e vermouth rosso.",
        "ingredienti" => [
            ["nome" => "Gin", "quantita" => "30 ml"],
            ["nome" => "Campari bitter", "quantita" => "30 ml"],
            ["nome" => "Vermouth rosso", "quantita" => "30 ml"],
            ["nome" => "Arancia", "quantita" => "1 fetta"]
        ],
        "passaggi" => [
            "Versare i 30ml di Campari bitter",
            "Aggiungere i 30 ml di Vermouth rosso",
            "Aggiungere i 30ml di Gin",
            "Mescolare il Negroni",
            "Guarnire con la fetta di arancia"
        ]
    ];
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            
        
        <div class="riquadroSfondo">
            <div class="sezioneTesto">
            <svg viewBox="0 0 1024 1024" xmlns="http://www.w3.org/2000/svg">
                            <path d="M825.6 460.8c-12.8 0-32 6.4-44.8 12.8l-115.2-108.8c6.4-19.2 12.8-38.4 12.8-57.6 0-64-51.2-121.6-121.6-121.6-64 0-121.6 51.2-121.6 121.6 0 44.8 19.2 76.8 51.2 102.4L409.6 640h-6.4c-25.6 0-51.2 6.4-70.4 19.2L243.2 582.4c6.4-12.8 6.4-19.2 6.4-32 0-51.2-38.4-89.6-89.6-89.6-51.2 0-89.6 38.4-89.6 89.6 0 51.2 38.4 89.6 89.6 89.6 19.2 0 32-6.4 44.8-12.8L294.4 704c-6.4 12.8-12.8 32-12.8 51.2 0 64 51.2 121.6 121.6 121.6 64 0 121.6-51.2 121.6-121.6 0-44.8-19.2-76.8-51.2-102.4l76.8-230.4h6.4c25.6 0 44.8-6.4 64-19.2L736 512c-6.4 12.8-6.4 19.2-6.4 32 0 51.2 38.4 89.6 89.6 89.6 51.2 0 89.6-38.4 89.6-89.6s-32-83.2-83.2-83.2z m-409.6 352c-32 0-57.6-25.6-57.6-57.6s25.6-57.6 57.6-57.6 57.6 25.6 57.6 57.6-25.6 57.6-57.6 57.6z"  
                            />
                            </svg>     
            <h1> Nuova variante </h1>

            <h4>Crea la tua versione di: <a class="nomeVecchio"><?= htmlspecialchars($drinkOriginale["nome"]) ?></a> </h4>
            </div>

            <div class="sezioneForm">
            <form class= "posForm" action="/invia" method="post" enctype="multipart/form-data" data-form-drink data-chiave-salvataggio="drinkcraft-variazione-negroni-temporaneo">
                
                <div class="campoTesto">
                <label for="nomeDrink"> Nome della tua variante</label>
                <input type="text" id="nomeDrink" name="NomeDrink" placeholder="Dai un nome al tuo drink..." minlength="3" maxlength="60" required data-campo-nome-drink> 
                </div>

                <div class="campoDescrizione">
                <label for="descrizioneVariazione"> Breve descrizione di cosa hai cambiato</label>
                <input type="text" id="descrizioneVariazione" name="Descrizione" placeholder="Scrivi qua le tue modifiche..." required data-campo-descrizione-drink> 
                </div>
     
                <div class="campoImmagine">
                    <label for="Immagine" class=" spazioImmagine">
                    <span class="IconaImm"> + </span>
                    <span class="TestoImm">Carica immagine del drink</span>
                    <img id="anteprimaImmagine" alt="Anteprima" hidden>
                    <input type="file" id="Immagine" name="Immagine" accept="image/*" data-campo-immagine-drink>
                    </label>
                    </div>
 
                <div class="campoIngredienti" data-lista-ingredienti>
                <label for="Ingredienti"> Ingredienti</label>
                <label for="quantita">Quantita</label>
                
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
                <button class="annulla" type="reset"> <img src="../Immagini/Annulla.png"> Annulla </button>
                <button class="inviato" type="submit" data-pulsante-pubblica disabled> <img src="../Immagini/iconaAccedi.png"> 
                            Pubblica Variante</button>

            </form>

            
        </div>
        </div>
        
        <script type="application/json" id="dati-drink-originale"><?= json_encode($drinkOriginale) ?></script>
        <script src="<?= $JS['FormDrinkUtils'] ?>"></script>
        <script src="<?= $JS['FormDrinkIngredienti'] ?>"></script>
        <script src="<?= $JS['FormDrinkPassaggi'] ?>"></script>
        <script src="<?= $JS['VariazionePrecompilazione'] ?>"></script>
        <script src="<?= $JS['FormDrinkValidazione'] ?>"></script>
        <script src="<?= $JS['FormDrinkSalvataggio'] ?>"></script>
        </body>

</html>

