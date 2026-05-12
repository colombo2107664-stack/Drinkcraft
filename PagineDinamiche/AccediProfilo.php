<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina=" Accedi al Profilo";
    $StilePagina= $stile["AccediProfilo"];
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
    
            <form>
                <div class="campo">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>

                <div class="campo">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password">
                </div>
                
                <a href='<?= $pagine['PaginaProfilo'] ?>'1><button type="button" class="inviato">
                     Accedi<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-big-right-icon lucide-arrow-big-right"><path d="M13.207 19.793a.707.707 0 0 1-1.207-.5V16a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h6a1 1 0 0 0 1-1V4.707a.707.707 0 0 1 1.207-.5l6.94 6.94a1.207 1.207 0 0 1 0 1.707z"/></svg>
                </button></a>
                
                <div class="Crea">
                    Non hai un account? <a href="<?= $pagine['CreaProfilo'] ?>">Registrati</a>
                </div>
            </form>

            
        </div>
            
        </body>

</html>

