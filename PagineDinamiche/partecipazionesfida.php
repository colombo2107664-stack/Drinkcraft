<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    $TitoloPagina=" Sfida Drinkcraft";
    $StilePagina= $stile["partecipazionesfida"];
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            
        <a href="<?= $pagine['sfideSettimanali'] ?>"><button class="indietro"><svg class = "icon"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-undo2-icon lucide-undo-2"><path d="M9 14 4 9l5-5"/><path d="M4 9h10.5a5.5 5.5 0 0 1 5.5 5.5a5.5 5.5 0 0 1-5.5 5.5H11"/></svg>Indietro</button></a>

        <div class="sfida">
            <img src="../Immagini/PrimaveraMediterranea.png" alt="Sfida primavera mediterranea" class="immagine-sfida">

            <div class="dati">
                <div class="badge">
                    <img src="../Immagini/mediterraneo.png" alt="mediterraneo" class="img-badge">
                    <h4 class="titbadge">Maestro Mediterraneo</h4>
                </div>
                <h1 class="titolo">Primavera Mediterranea</h1>
                <p class="descrizione">Crea un drink che celebri i sapori fresschi del Mediterraneo usando almeno un agrume e un erba aromatica.</p>

                <div class="barra-sfida">
                        <div class="oggetto-barra">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-calendar-icon lucide-calendar"><path d="M8 2v4"/><path d="M16 2v4"/><rect width="18" height="18" x="3" y="4" rx="2"/><path d="M3 10h18"/></svg> 
                            <div class="scritte">
                                <h4 class="Titolo">Scadenza</h4>
                                <span class="valore">15 Apr</span>
                            </div>
                        </div>

                        <div class="oggetto-barra">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users-icon lucide-users"><path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"/><path d="M16 3.128a4 4 0 0 1 0 7.744"/><path d="M22 21v-2a4 4 0 0 0-3-3.87"/><circle cx="9" cy="7" r="4"/></svg>
                            <div class="scritte">
                                <h4 class="Titolo">Partecipanti</h4>
                                <span class="valore">127</span>
                            </div>
                        </div>
                </div>
            </div>

        </div>

        <div class="Partecipazione-sfida">
            <h2 class="titolo">Come Partecipare:</h2>

            <ol class="passi-partecipazione">
                <li class="passo">
                    <h4>Crea la tua ricetta</h4>
                    <span>Segui il tema della sfida e crea un drink originale che rispetti i requisiti</span>
                </li>
                <li class="passo">
                    <h4>Pubblica il tuo drink</h4>
                    <span>Condividi la tua creazione con foto e ricetta dettagliata</span> 
                </li>
                <li class="passo">
                    <h4>Vinci il badge</h4>
                    <span>I drink più votati riceveranno il badge esclusivo della sfida</span>
                </li>
            </ol>

        <div class="partecipa">
            <h2 class="titolo">Pronto a partecipare?</h2>
            <span>Crea ora il tuo drink e uniisciti alla sfida!</span>

            <div class="azioni-partecipazione">
                <button type="button" class="partecipa-bottone" data-apri-drink-pubblicati>Seleziona drink pubblicato</button>
                <button type="button" class="partecipa-bottone" data-apri-nuovo-drink>Crea nuovo drink</button>
            </div>

            <div class="drink-selezionato" data-area-selezione-drink hidden>
                <img src="../Immagini/no_alcool.png" alt="Drink selezionato" data-immagine-drink-selezionato>
                <div>
                    <h3 data-nome-drink-selezionato>Drink selezionato</h3>
                    <p data-descrizione-drink-selezionato></p>
                </div>
            </div>

            <div class="popup-partecipazione" data-popup-drink-pubblicati>
                <div class="popup-partecipazione-contenuto">
                    <div class="intestazione-popup-partecipazione">
                        <h3>Drink pubblicati</h3>
                        <button type="button" class="chiudi-popup-partecipazione" data-chiudi-popup>Chiudi</button>
                    </div>

                    <div class="lista-drink-pubblicati" data-lista-drink-pubblicati>
                        <button type="button" class="drink-pubblicato" data-id-drink="1" data-nome-drink="negroni" data-descrizione-drink="Drink fresco con agrumi ed erbe aromatiche." data-immagine-drink="../Immagini/negroni.png">
                            <img src="../Immagini/negroni.png" alt="negroni">
                            <span>Negroni</span>
                        </button>

                        <button type="button" class="drink-pubblicato" data-id-drink="2" data-nome-drink="spritz" data-descrizione-drink="Drink elegante dal gusto classico." data-immagine-drink="../Immagini/aperolspritz.png">
                            <img src="../Immagini/aperolspritz.png" alt="spritz">
                            <span>Spritz</span>
                        </button>

                        <button type="button" class="drink-pubblicato" data-id-drink="3" data-nome-drink="Virgin Mojito" data-descrizione-drink="Drink analcolico con lime e menta." data-immagine-drink="../Immagini/virginmojito.png">
                            <img src="../Immagini/virginmojito.png" alt="Virgin Mojito">
                            <span>Virgin Mojito</span>
                        </button>
                    </div>
                </div>
            </div>

            <div class="popup-partecipazione popup-nuovo-drink" data-popup-nuovo-drink>
                <div class="popup-partecipazione-contenuto popup-nuovo-drink-contenuto">
                    <div class="intestazione-popup-partecipazione">
                        <h3>Crea nuovo drink</h3>
                        <button type="button" class="chiudi-popup-partecipazione" data-chiudi-popup>Chiudi</button>
                    </div>

                    <?php require __DIR__ . "/../" . $elementiCondivisi["formCreaDrink"]; ?>
                </div>
            </div>
        </div>
        </div>
        <script src="<?= $JS['FormDrinkUtils'] ?>"></script>
        <script src="<?= $JS['FormDrinkIngredienti'] ?>"></script>
        <script src="<?= $JS['FormDrinkPassaggi'] ?>"></script>
        <script src="<?= $JS['FormDrinkValidazione'] ?>"></script>
        <script src="<?= $JS['FormDrinkSalvataggio'] ?>"></script>
        <script src="<?= $JS['PartecipazioneUtili'] ?>"></script>
        <script src="<?= $JS['PartecipazionePopup'] ?>"></script>
        <script src="<?= $JS['PartecipazioneSceltaDrink'] ?>"></script>
        <script src="<?= $JS['PartecipazioneNuovoDrink'] ?>"></script>
        <script src="<?= $JS['form'] ?>"></script>
    </body>
</html>
