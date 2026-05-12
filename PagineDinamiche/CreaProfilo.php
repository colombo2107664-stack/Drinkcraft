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
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-pen-icon lucide-user-pen"><path d="M11.5 15H7a4 4 0 0 0-4 4v2"/><path d="M21.378 16.626a1 1 0 0 0-3.004-3.004l-4.01 4.012a2 2 0 0 0-.506.854l-.837 2.87a.5.5 0 0 0 .62.62l2.87-.837a2 2 0 0 0 .854-.506z"/><circle cx="10" cy="7" r="4"/></svg>   
            <h1>Registrazione</h1>
            <h4> Crea il tuo profilo Drinkcraft.</h2>
            </div>

            <div class="sezioneForm">
            <form action="<?= $pagine['Creaprofilo2'] ?>" method="post">
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
                
                <button class="inviato"> Avanti <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-arrow-big-right-icon lucide-arrow-big-right"><path d="M13.207 19.793a.707.707 0 0 1-1.207-.5V16a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1v-4a1 1 0 0 1 1-1h6a1 1 0 0 0 1-1V4.707a.707.707 0 0 1 1.207-.5l6.94 6.94a1.207 1.207 0 0 1 0 1.707z"/></svg> </button> 
                
                
            </form>

            <p> </p>
            </div>
        </div>
            
        </body>

</html>

