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
            <img class="fotoSopra" src="../Immagini/profilo.png">    
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
                    <img src="../Immagini/invio.png" alt=""> Accedi
                </button></a>
                
                <p class="Crea">
                    Non hai un account? <a href="<?= $pagine['CreaProfilo'] ?>">Registrati</a>
                </p>
            </form>

            
        </div>
            
        </body>

</html>

