<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina=" Accedi al Profilo";
    $StilePagina= $stile["AccediProfilo"];

    $messaggioErrore = '';
    if (isset($_GET['errore']) && $_GET['errore'] === 'password') {
        $messaggioErrore = 'Password sbagliata';
    }
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            
        <div class="riquadroSfondo">
            <div class="sezioneTesto">
            <svg class = 'fotoSopra' xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-check-icon lucide-user-round-check"><path d="M2 21a8 8 0 0 1 13.292-6"/><circle cx="10" cy="8" r="5"/><path d="m16 19 2 2 4-4"/></svg>    
            <h1>Accedi</h1>
            <h4>Accedi al tuo profilo Drinkcraft.</h4>
            </div>

            <div class="sezioneForm">
    
            <form id="formAccesso" data-messaggio-errore="<?= htmlspecialchars($messaggioErrore); ?>">
                <div class="campo">
                    <label for="email">Email</label>
                    <input type="email" id="campoEmail" name="email">
                    <span id="messaggioErroreEmail" class="messaggio-errore"></span>
                </div>

                <div class="campo">
                    <label for="password">Password</label>
                    <div class="contenitore-password">
                        <input type="password" id="campoPassword" name="password">
                        <button type="button" id="bottoneMostraPassword" class="bottone-mostra-password" title="Mostra/Nascondi password">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye"><path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/><circle cx="12" cy="12" r="3"/></svg>
                        </button>
                    </div>
                </div>
                
                <button type="submit" class="inviato">
                     Accedi<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-big-right-icon lucide-arrow-big-right"><path d="M13.207 19.793a.707.707 0 0 1-1.207-.5V16a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h6a1 1 0 0 0 1-1V4.707a.707.707 0 0 1 1.207-.5l6.94 6.94a1.207 1.207 0 0 1 0 1.707z"/></svg>
                </button>
                
                <div class="Crea">
                    Non hai un account? <a href="<?= $pagine['CreaProfilo'] ?>">Registrati</a>
                </div>
            </form>

            
        </div>
            
        <script src="<?= $JS['AccediUtils']; ?>"></script>
        <script src="<?= $JS['AccediPassword']; ?>"></script>
        <script src="<?= $JS['AccediValidazione']; ?>"></script>
        <script src="<?= $JS['AccediErrori']; ?>"></script>

        </body>

    </html>

