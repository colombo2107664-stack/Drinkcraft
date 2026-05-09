<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina=" Crea il tuo Profilo";
    $StilePagina= $stile["CreaProfilo"];
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            
            
        <div class="riquadroSfondo">
            <div class="sezioneTesto">
            <img src="../Immagini/profilo.png">    
            <h1>Registrazione</h1>
            <h4> Crea il tuo profilo Drinkcraft.</h2>
            </div>

            <div class="sezioneForm">
            <form action="/invia" method="post">
                <div class="campo">
                <label for="nome"> Nome</label>
                <input type="text" id="nome" name="nome">
                </div>

                <div class="campo">
                <label for="email"> Email</label>
                <input type="email" id="email" name="email">
                </div>

                <div class="campo">
                <label for="password">Password</label>
                <input type="password" id="password" name="password">
                </div>
                
                <a href="<?= $pagine['CreaProfilo2'] ?>" ><button class="inviato"> <img src="../Immagini/invio.png"> Avanti </button> </a>
                
                
            </form>

            <p> </p>
            </div>
        </div>
            
        </body>

</html>

