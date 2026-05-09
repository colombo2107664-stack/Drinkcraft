<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina=" Crea il tuo Profilo";
    $StilePagina= $stile["CreaProfilo2"];
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            

        <div class="riquadroSfondo">
            <div class="sezioneTesto">
            <img src="../Immagini/aggiungi_drink.png" alt="Aggiungi Drink">    
            <h1>Nuovo Profilo</h1>
            <h4>Fai conoscere te, oltre le tue passioni!</h4>
            </div>

            <div class="sezioneForm">
            <form class= "posForm" action="/invia" method="post">
                
                <div class="campoTesto">
                    
                <label for="nomeUtente"> Nome utente</label>
                <input type="text" id="nomeUtente" name="NomeUtente" placeholder="Scegli il tuo nome utente" required > 
                </div>

                <div class="campoAnnoNascita">
                <label>Età</label>

                    <input type="date" id="Età" name="AnnoNascita" value="00/00/0000" required>

                </div>

                <div class="campoDifficolta">
                <span><label>Genere</label></span>

                <div>
                    <input type="radio" id="facile" name="Difficolta" value="facile" required>
                    <label for="facile" class="Opzionebottone">Uomo</label>

                    <input type="radio" id="media" name="Difficolta" value="media">
                    <label for="media" class="Opzionebottone">Donna</label>

                    <input type="radio" id="difficile" name="Difficolta" value="difficile">
                    <label for="difficile" class="Opzionebottone">Altro</label>
                </div>
                </div> 

                <div class="campoImmagine">
                    <label for="Immagine" class=" spazioImmagine">
                    <span class="IconaImm"> + </span>
                    <span class="TestoImm">Carica una foto profilo</span>
                    <input type="file" id="Immagine" name="Immagine" accept="image/*" required>
                    </label>
                    </div>

                <div class="campoBiografia">
                <label for="Biografia">Biografia</label>
                <textarea id="Biografia" name="Biografia" placeholder="Raccontati!" rows="4" required></textarea>
                </div>
                
                                       
                <a href="<?= $pagine['CreaProfilo'] ?>"><button class="indietro" type="delete"> <img src="../Immagini/Annulla.png"> Annulla </button></a>
                <a href="<?= $pagine['PaginaProfilo'] ?>"><button class="inviato" type="submit"> <img src="../Immagini/iconaAccedi.png"> Conferma </button></a>

            </form>

            
        </div>
        </div>
            
        </body>

</html>

