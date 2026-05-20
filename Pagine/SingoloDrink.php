<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina=" Esplora il drink";
    $StilePagina= $stile["drink"];
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            

        <div class="drink" data-drink-id="negroni">
            <div class="sinistra">
                <div class="ingredienti-box">
                    <div class="titoletti">
                        <h3>Ingredienti</h3>
                        <span>Alcolico</span>
                    </div>

                    <ul class="ingredienti" data-ingredienti>
                        <li>
                            <p class="nome">Gin</p>
                            <p class="quantita">30 ml</p>
                        </li>
                        <li>
                            <p class="nome">Campari bitter</p>
                            <p class="quantita">30 ml</p>
                        </li>
                        <li>
                            <p class="nome">Vermouth rosso</p>
                            <p class="quantita">30 ml</p>
                        </li>
                        <li>
                            <p class="nome">Arancia</p>
                            <p class="quantita">1 fetta</p>
                        </li>
                        </ul>

                        

                    </div>
                    <button class="copia-ingredienti" type="button" data-bottone-copia-ingredienti>Copia ingredienti</button>
                    
            </div>
            <div class="centro">
                <h1>Negroni</h1>

                <div class="profilo">
                    <img src="/Immagini/giuliafreshmix.png" alt="Foto_profilo" class="Fotoprofilo">
                    <div class="dati">
                        <h4>Giulia FreshMix</h4>
                        <div class="dati-tempo">
                            <svg class= 'icon' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            <span>8h fa</span>
                        </div>
                    </div>
                    <div class="difficolta">
                        <span>Facile</span>
                    </div>
                </div>
                <img src="../Immagini/negroni.png" alt="Negroni" class="immaginedrink" data-immagine-drink>
                <div class="recensione">
                    <div class="azione azione-like" role="button" tabindex="0" data-bottone-like data-url="/ApiDrink/like-drink.php" aria-pressed="false">
                        <svg viewBox="0 0 24 24" class="icon">
                            <path d="M20.8 4.6c-1.5-1.4-4-1.4-5.5 0L12 7.7l-3.3-3.1c-1.5-1.4-4-1.4-5.5 0-1.6 1.5-1.6 4 0 5.5L12 21l8.8-10.9c1.6-1.5 1.6-4 0-5.5z"/>
                        </svg>
                        <span data-contatore-like>255</span>
                    </div>
                    
                    <div class="azione">
                        <svg viewBox="0 0 24 24" class="icon">
                            <path d="M21 6h-18v12h4v4l4-4h10z"/>
                        </svg>
                        <span>17</span>
                    </div>
                </div>

                <div class="bottoni">
                    <button class="salva" type="button" data-bottone-salva data-url="/ApiDrink/salva-drink.php" aria-pressed="false">Salva</button>
                </div>
            </div>
            <div class="destra">
                <div class="preparazione-box">
                    <h3>Preparazione</h3>

                    <ol class="preparazione">
                        <li>Versare i 30ml di Campari bitter</li>
                        <li>Aggiungere i 30 ml di Vermouth rosso</li>
                        <li>Aggiungere i 30ml di Gin</li>
                        <li>Mescolare il Negroni</li>
                        <li>Guarnire con la fetta di arancia</li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="sezCommenti" data-lista-commenti>
            <h1>Commenti del post</h1>  
            <div class="commento"> 
                <p class=testoCommento>
                    Che bello questo drink! Devo assolutamente riprovarlo
                </p>
                <div class="profiloPiccolo">
                    <img src="/Immagini/giuliafreshmix.png" alt="Foto_profilo" class="Fotoprofilo">
                    <div class="dati">
                        <h4>Giulia FreshMix</h4>
                        <div class="dati-tempo">
                            <svg class= 'icon' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            <span>8h fa</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="commento"> 
                <p class=testoCommento>
                    Che bello questo drink! Devo assolutamente riprovarlo
                </p>
                <div class="profiloPiccolo">
                    <img src="/Immagini/giuliafreshmix.png" alt="Foto_profilo" class="Fotoprofilo">
                    <div class="dati">
                        <h4>Giulia FreshMix</h4>
                        <div class="dati-tempo">
                            <svg class= 'icon' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            <span>8h fa</span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="commento"> 
                <p class=testoCommento>
                    Che bello questo drink! Devo assolutamente riprovarlo
                </p>
                <div class="profiloPiccolo">
                    <img src="/Immagini/giuliafreshmix.png" alt="Foto_profilo" class="Fotoprofilo">
                    <div class="dati">
                        <h4>Giulia FreshMix</h4>
                        <div class="dati-tempo">
                            <svg class= 'icon' xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>
                            <span>8h fa</span>
                        </div>
                    </div>
                </div>
            </div>

            <form class="form-commento" data-form-commento data-url="/ApiDrink/commento-drink.php">
                <textarea class="campo-commento" data-campo-commento name="testo_commento" placeholder="Scrivi un commento"></textarea>
                <button class="bottone-commento" type="submit">Invia</button>
                <p class="messaggio-commento" data-messaggio-commento></p>
            </form>
        </div>
        <script src="<?= $JS['DrUtili'] ?>"></script>
        <script src="<?= $JS['DrLike'] ?>"></script>
        <script src="<?= $JS['DrSalvataggi'] ?>"></script>
        <script src="<?= $JS['DrCommenti'] ?>"></script>
        <script src="<?= $JS['DrImmagine'] ?>"></script>
        <script src="<?= $JS['DrIngredienti'] ?>"></script>
    </body>
</html>
