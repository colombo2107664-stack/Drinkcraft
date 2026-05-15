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
                <form class="barraRicerca" action="<?= $pagine['ricerca'] ?>" method="get" data-form-ricerca>
                <input type="search" id="ricerca" name="ricerca" placeholder="Cerca ricette o tag..." data-input-ricerca-pagina />
                </form>
                <div class="suggerimenti-ricerca" data-suggerimenti-ricerca></div>

                <div class="filtri-ricerca">
                    <select data-filtro-categoria>
                        <option value="">Tutte le categorie</option>
                        <option value="alcolico">Alcolico</option>
                        <option value="analcolico">Analcolico</option>
                    </select>
                    <select data-filtro-difficolta>
                        <option value="">Tutte le difficoltà</option>
                        <option value="facile">Facile</option>
                        <option value="media">Media</option>
                    </select>
                    <input type="search" data-filtro-ingredienti placeholder="Filtra per ingrediente">
                </div>

            <div class="sezioneRisultati" data-lista-risultati>
                <div class="risultato risultato-drink"
                    data-risultato-ricerca
                    data-url="<?= $pagine['SingoloDrink'] ?>"
                    data-tipo="drink"
                    data-nome="Negroni"
                    data-categoria="alcolico"
                    data-difficolta="facile"
                    data-ingredienti="gin campari bitter vermouth rosso arancia"
                    role="link"
                    tabindex="0">
                    <img src="../Immagini/negroni.png" alt="Negroni">
                    <h3>Negroni</h3>
                    <p>Drink alcolico</p>
                </div>
                <div class="risultato risultato-drink"
                    data-risultato-ricerca
                    data-url="<?= $pagine['SingoloDrink'] ?>"
                    data-tipo="drink"
                    data-nome="Virgin Mojito"
                    data-categoria="analcolico"
                    data-difficolta="facile"
                    data-ingredienti="lime menta zucchero soda ghiaccio"
                    role="link"
                    tabindex="0">
                    <img src="../Immagini/virginmojito.png" alt="Virgin Mojito">
                    <h3>Virgin Mojito</h3>
                    <p>Drink analcolico</p>
                </div>
                <div class="risultato risultato-drink"
                    data-risultato-ricerca
                    data-url="<?= $pagine['SingoloDrink'] ?>"
                    data-tipo="drink"
                    data-nome="Piña Colada"
                    data-categoria="alcolico"
                    data-difficolta="media"
                    data-ingredienti="rum crema cocco ananas ghiaccio"
                    role="link"
                    tabindex="0">
                    <img src="../Immagini/pinacolada.png" alt="Piña Colada">
                    <h3>Piña Colada</h3>
                    <p>Drink alcolico</p>
                </div>
                <div class="risultato risultato-profilo"
                    data-risultato-ricerca
                    data-url="<?= $pagine['PaginaProfilo'] ?>"
                    data-tipo="profilo"
                    data-nome="Giulia FreshMix"
                    data-categoria="profilo"
                    data-difficolta=""
                    data-ingredienti=""
                    role="link"
                    tabindex="0">
                    <img src="../Immagini/giuliafreshmix.png" alt="Giulia FreshMix">
                    <h3>Giulia FreshMix</h3>
                    <p>Profilo creatore</p>
                </div>
                <div class="risultato risultato-profilo"
                    data-risultato-ricerca
                    data-url="<?= $pagine['PaginaProfilo'] ?>"
                    data-tipo="profilo"
                    data-nome="Fius Gamer"
                    data-categoria="profilo"
                    data-difficolta=""
                    data-ingredienti=""
                    role="link"
                    tabindex="0">
                    <img src="../Immagini/Fiussss.jpg" alt="Fius Gamer">
                    <h3>Fius Gamer</h3>
                    <p>Profilo creatore</p>
                </div>


            </div>
            <p class="messaggio-ricerca-vuota" data-messaggio-ricerca-vuota>Nessun risultato trovato</p>
            

            
        </div>
        </div>
        <script src="<?= $JS['RicercaUtili'] ?>"></script>
        <script src="<?= $JS['RicercaRisultati'] ?>"></script>
        <script src="<?= $JS['RicercaLive'] ?>"></script>
        <script src="<?= $JS['RicercaSuggerimenti'] ?>"></script>
        <script src="<?= $JS['RicercaFiltri'] ?>"></script>
        <script src="<?= $JS['RicercaToolbar'] ?>"></script>
        <script src="<?= $JS['RicercaApertura'] ?>"></script>
        
            
        </body>

</html>
