<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina=" Crea il tuo drink";
    $StilePagina= $stile["creaDrink"];
?>

<!DOCTYPE html>
<html lang="it">
    <script src="<?= $stile["creaDrink"]?>"></script>
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            
        <div class="riquadroSfondo">
            <div class="sezioneTesto">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-circle-fading-plus-icon lucide-circle-fading-plus"><path d="M12 2a10 10 0 0 1 7.38 16.75"/><path d="M12 8v8"/><path d="M16 12H8"/><path d="M2.5 8.875a10 10 0 0 0-.5 3"/><path d="M2.83 16a10 10 0 0 0 2.43 3.4"/><path d="M4.636 5.235a10 10 0 0 1 .891-.857"/><path d="M8.644 21.42a10 10 0 0 0 7.631-.38"/></svg>
    
            <h1>Nuovo Drink</h1>
            <h4>Condividi la tua creazione e lascia che gli altri la migliorino</h4>
            </div>

            <div class="sezioneForm">
            <?php require __DIR__ . "/../" . $elementiCondivisi["formCreaDrink"]; ?>

            
        </div>
        </div>
            
        <script src="<?= $JS['FormDrinkUtils'] ?>"></script>
        <script src="<?= $JS['FormDrinkIngredienti'] ?>"></script>
        <script src="<?= $JS['FormDrinkPassaggi'] ?>"></script>
        <script src="<?= $JS['FormDrinkValidazione'] ?>"></script>
        <script src="<?= $JS['FormDrinkSalvataggio'] ?>"></script>
        </body>

</html>
