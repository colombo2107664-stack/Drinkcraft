<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina="Post Salvati";
    $StilePagina= $stile["postSalvati"];
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            
            

            <div class="sezioneTitolo">
            <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M6 3h12v18l-6-4-6 4z"/>
            </svg>
  
            <h1>I miei drink salvati</h1>
            <h4>Trova i tuoi cocktail preferiti sempre a portata di mano</h4>
            
            </div>


            
            
            <div class="SezioneDrink">
                <div class="postDrink">
                    <img src="../Immagini/moscowmule.png">
                    <p> Moscow Mule</p> 
                </div>
                <div class="postDrink">
                    <img src="../Immagini/virginmojito.png">
                    <p>Virgin Mojito</p> 
                </div>
                <div class="postDrink">
                    <img src="../Immagini/aperolspritz.png">
                    <p>Aperol Spritz</p> 
                </div>

            </div>
            
        
            
        </body>

</html>

