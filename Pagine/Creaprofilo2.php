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
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-pen-icon lucide-user-pen"><path d="M11.5 15H7a4 4 0 0 0-4 4v2"/><path d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/><circle cx="10" cy="7" r="4"/></svg>  
            <h1>Nuovo Profilo</h1>
            <h4>Fai conoscere te, oltre le tue passioni!</h4>
            </div>

            <div class="sezioneForm">
            <form class= "posForm" action="<?= $pagine['PaginaProfilo'] ?>" method="post">
                
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
                    <img id="anteprimaImmagine" alt="Anteprima" hidden>
                    <input type="file" id="Immagine" name="Immagine" accept="image/*" required>
                    </label>
                    </div>

                <div class="campoBiografia">
                <label for="Biografia">Biografia</label>
                <textarea id="Biografia" name="Biografia" placeholder="Raccontati!" rows="4" required></textarea>
                </div>
                
                                       
                <a href="<?= $pagine['CreaProfilo'] ?>"><button class="indietro" type="delete"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-undo2-icon lucide-undo-2"><path d="M9 14 4 9l5-5"/><path d="M4 9h10.5a5.5 5.5 0 0 1 5.5 5.5a5.5 5.5 0 0 1-5.5 5.5H11"/></svg> Annulla </button></a>
                <a href="<?= $pagine['PaginaProfilo'] ?>"><button class="inviato" type="submit"> <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-check-icon lucide-check"><path d="M20 6 9 17l-5-5"/></svg> Conferma </button></a>

            </form>

            
        </div>
        </div>
            
        <script src="../JS/form.js"></script>
        </body>

</html>

