<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina="Cerca...";
    $StilePagina= $stile["ricerca"];
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            
        
        <div class="riquadroSfondo">
            <div class="sezioneTesto">
            <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-search-icon lucide-search"><path d="m21 21-4.34-4.34"/><circle cx="11" cy="11" r="8"/></svg>
    
            <h1> Inizia la tua ricerca  </h1>

            <h4> Cerca drink per nome, ingrediente, autore o tag </h4>
            </div>

            <div class="sezioneForm">
                <form class="barraRicerca" action="https://www.google.com/search" method="get">
                <input type="search" id="ricerca" name="ricerca" placeholder="Cerca ricette o tag..." />
                </form>
            <div class="sezioneRisultati">
                <div class="risultato"><img src="../Immagini/Fiussss.jpg">risultato 1</div>
                <div class="risultato"><img src="../Immagini/Fiussss.jpg">risultato 2</div>
                <div class="risultato"><img src="../Immagini/Fiussss.jpg">risultato 3</div>
                <div class="risultato"><img src="../Immagini/Fiussss.jpg">risultato 4</div>
                <div class="risultato"><img src="../Immagini/Fiussss.jpg">risultato 5</div>


            </div>
            

            
        </div>
        </div>
        
            
        </body>

</html>

