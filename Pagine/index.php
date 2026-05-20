<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    include __DIR__ . "/../" . $elementiCondivisi["drink"];
    $TitoloPagina=" HomePage Drinkcraft";
    $StilePagina= $stile["index"];


    $Post=[
                // Negroni
                $negroni = new Drink(
                                    //NOME
                                    'Negroni',
                                    //TIPO
                                    'Alcolico',
                                    //IMMAGINE
                                    '/Immagini/negroni.png',
                                    //INGREDIENTI
                                    [
                                        ['nome' => 'Gin', 'quantita' => '30 ml'],
                                        ['nome' => 'Campari bitter', 'quantita' => '30 ml'],
                                        ['nome' => 'Vermouth rosso', 'quantita' => '30 ml'],
                                        ['nome' => 'Arancia', 'quantita' => '1 fetta']
                                    ],
                                    //PREPARAZIONE
                                    [
                                        'Versare i 30ml di Campari bitter',
                                        'Aggiungere i 30 ml di Vermouth rosso',
                                        'Aggiungere i 30ml di Gin',
                                        'Mescolare il Negroni',
                                        'Guarnire con la fetta di arancia'
                                    ],
                                    //RECENSIONE
                                    [
                                        'foto' => '/Immagini/Fiussss.jpg',
                                        'nome' => 'Fius Gamer',
                                        'tempo_icon' => '/Immagini/recenti2.png',
                                        'tempo' => '6g fa'
                                    ],
                                    //AZIONI
                                    [
                                        //LIKE
                                        [
                                            'svg' => 'M20.8 4.6c-1.5-1.4-4-1.4-5.5 0L12 7.7l-3.3-3.1c-1.5-1.4-4-1.4-5.5 0-1.6 1.5-1.6 4 0 5.5L12 21l8.8-10.9c1.6-1.5 1.6-4 0-5.5z',
                                            'numero' => 0,
                                            'label' => ''
                                        ],
                                        //COMMENTI
                                        [
                                            'svg' => 'M21 6h-18v12h4v4l4-4h10z',
                                            'numero' => 0,
                                            'label' => ''
                                        ]
                                    ],
                                    //DIFFICOLTA
                                    'Facile'
                                ),
                                
            
                // Virgin Mojito
                $virginMojito = new Drink(
                    //NOME
                    'Virgin Mojito',
                    //TIPO
                    'Analcolico',
                    //IMMAGINE
                    '/Immagini/virginmojito.png',
                    //INGREDIENTI
                    [
                        ['nome' => 'Lime', 'quantita' => '1/2'],
                        ['nome' => 'Menta fresca', 'quantita' => '8 foglie'],
                        ['nome' => 'Zucchero di canna', 'quantita' => '2 cucchiaini'],
                        ['nome' => 'Soda', 'quantita' => '100 ml'],
                        ['nome' => 'Ghiaccio', 'quantita' => 'q.b.']
                    ],
                    //PREPARAZIONE
                    [
                        'Mettere il lime tagliato a pezzi e lo zucchero nel bicchiere',
                        'Pestare delicatamente insieme alle foglie di menta',
                        'Aggiungere il ghiaccio',
                        'Versare la soda',
                        'Mescolare e servire ben freddo'
                    ],
                    //RECENSIONE
                    [
                        'foto' => '/Immagini/profilo5.jpg',
                        'nome' => 'Giulia FreshMix',
                        'tempo_icon' => '/Immagini/recenti2.png',
                        'tempo' => '8h fa'
                    ],
                    //AZIONI
                    [
                        //LIKE
                        [
                            'svg' => 'M20.8 4.6c-1.5-1.4-4-1.4-5.5 0L12 7.7l-3.3-3.1c-1.5-1.4-4-1.4-5.5 0-1.6 1.5-1.6 4 0 5.5L12 21l8.8-10.9c1.6-1.5 1.6-4 0-5.5z',
                            'numero' => 255,
                            'label' => ''
                        ],
                        //COMMENTI
                        [
                            'svg' => 'M21 6h-18v12h4v4l4-4h10z',
                            'numero' => 17,
                            'label' => ''
                        ]
                    ],
                    //DIFFICOLTA
                    'Facile'
                ),
                // Piña Colada
                $pinacolada = new Drink(
                    //NOME
                    'Piña Colada',
                    //TIPO
                    'Alcolico',
                    //IMMAGINE
                    '/Immagini/pinacolada.png',
                    //INGREDIENTI
                    [
                        ['nome' => 'Rum bianco', 'quantita' => '50 ml'],
                        ['nome' => 'Crema di cocco', 'quantita' => '50 ml'],
                        ['nome' => 'Succo d\'ananas', 'quantita' => '100 ml'],
                        ['nome' => 'Ghiaccio', 'quantita' => 'q.b.'],
                        ['nome' => 'Ananas', 'quantita' => '1 fetta']
                    ],
                    //PREPARAZIONE
                    [
                        'Versare rum bianco, crema di cocco e succo d\'ananas nel frullatore',
                        'Aggiungere il ghiaccio',
                        'Frullare fino a ottenere un composto cremoso',
                        'Versare il cocktail nel bicchiere',
                        'Guarnire con una fetta di ananas'
                    ],
                    //RECENSIONE
                    [
                        'foto' => '/Immagini/profilo2.jpg',
                        'nome' => 'Martina Shake',
                        'tempo_icon' => '/Immagini/recenti2.png',
                        'tempo' => '5h fa'
                    ],
                    //AZIONI
                    [
                        //LIKE
                        [
                            'svg' => 'M20.8 4.6c-1.5-1.4-4-1.4-5.5 0L12 7.7l-3.3-3.1c-1.5-1.4-4-1.4-5.5 0-1.6 1.5-1.6 4 0 5.5L12 21l8.8-10.9c1.6-1.5 1.6-4 0-5.5z',
                            'numero' => 527,
                            'label' => ''
                        ],
                        //COMMENTI
                        [
                            'svg' => 'M21 6h-18v12h4v4l4-4h10z',
                            'numero' => 41,
                            'label' => ''
                        ]
                    ],
                    //DIFFICOLTA
                    'Media'
                ),
                // Moscow Mule
                $moscowMule = new Drink(
                    //NOME
                    'Moscow Mule',
                    //TIPO
                    'Alcolico',
                    //IMMAGINE
                    '/Immagini/moscowmule.png',
                    //INGREDIENTI
                    [
                        ['nome' => 'Vodka', 'quantita' => '45 ml'],
                        ['nome' => 'Ginger beer', 'quantita' => '120 ml'],
                        ['nome' => 'Succo di lime', 'quantita' => '15 ml'],
                        ['nome' => 'Ghiaccio', 'quantita' => 'q.b.'],
                        ['nome' => 'Lime', 'quantita' => '1 fetta']
                    ],
                    //PREPARAZIONE
                    [
                        'Riempire il bicchiere con ghiaccio',
                        'Versare la vodka',
                        'Aggiungere il succo di lime',
                        'Completare con ginger beer',
                        'Mescolare delicatamente e guarnire con lime'
                    ],
                    //RECENSIONE
                    [
                        'foto' => '/Immagini/profilo3.jpg',
                        'nome' => 'Andrea MixLab',
                        'tempo_icon' => 'xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>',
                        'tempo' => '1sett fa'
                    ],
                    //AZIONI
                    [
                        //LIKE
                        [
                            'svg' => 'M20.8 4.6c-1.5-1.4-4-1.4-5.5 0L12 7.7l-3.3-3.1c-1.5-1.4-4-1.4-5.5 0-1.6 1.5-1.6 4 0 5.5L12 21l8.8-10.9c1.6-1.5 1.6-4 0-5.5z',
                            'numero' => 289,
                            'label' => ''
                        ],
                        //COMMENTI
                        [
                            'svg' => 'M21 6h-18v12h4v4l4-4h10z',
                            'numero' => 19,
                            'label' => ''
                        ]
                    ],
                    //DIFFICOLTA
                    'Facile'
                ),
                // Aperol Spritz
                $aperolSpritz = new Drink(
                    //NOME
                    'Aperol Spritz',
                    //TIPO
                    'Alcolico',
                    //IMMAGINE
                    '/Immagini/aperolspritz.png',
                    //INGREDIENTI
                    [
                        ['nome' => 'Aperol', 'quantita' => '60 ml'],
                        ['nome' => 'Prosecco', 'quantita' => '90 ml'],
                        ['nome' => 'Soda', 'quantita' => '30 ml'],
                        ['nome' => 'Ghiaccio', 'quantita' => 'q.b.'],
                        ['nome' => 'Arancia', 'quantita' => '1 fetta']
                    ],
                    //PREPARAZIONE
                    [
                        'Riempire un calice con ghiaccio',
                        'Versare il Prosecco',
                        'Aggiungere l\'Aperol',
                        'Completare con la soda',
                        'Mescolare delicatamente e guarnire con una fetta di arancia'
                    ],
                    //RECENSIONE
                    [
                        'foto' => '/Immagini/profilo4.jpg',
                        'nome' => 'Sara CocktailMood',
                        'tempo_icon' => '/Immagini/recenti2.png',
                        'tempo' => '3h fa'
                    ],
                    //AZIONI
                    [
                        //LIKE
                        [
                            'svg' => 'M20.8 4.6c-1.5-1.4-4-1.4-5.5 0L12 7.7l-3.3-3.1c-1.5-1.4-4-1.4-5.5 0-1.6 1.5-1.6 4 0 5.5L12 21l8.8-10.9c1.6-1.5 1.6-4 0-5.5z',
                            'numero' => 603,
                            'label' => ''
                        ],
                        //COMMENTI
                        [
                            'svg' => 'M21 6h-18v12h4v4l4-4h10z',
                            'numero' => 47,
                            'label' => ''
                        ]
                    ],
                    //DIFFICOLTA
                    'Facile'
                )];
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            
            <div class="benvenuto">
                <div class="benvenuto-scritte">
                    <h1>Crea. Condividi. Evolvi</h1>
                <p>Unisciti alla community che sta rivoluzionando il mondo delle bevande.<br>
                    Ogni ricetta è solo l'inizio di un'evoluzione. 
                
                </p>
                </div>
                <div class="benvenuto-bottoni">
                    <a href="<?= $pagine['creaDrink'] ?>"><button>Crea il tuo drink</button></a>
                </div>
                            
            </div>
            
            <div class="Feed">
                <div class="Feed-Scritta">
                    <h2>Feed della Community</h2>
                </div>

                <div class="Feed-Bottoni">
                    <button class="tab Attivo" data-filtro-feed="tutti">Tutti</button>
                    <button class="tab" data-filtro-feed="popolari"><svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trending-up-icon lucide-trending-up"><path d="M16 7h6v6"/><path d="m22 7-8.5 8.5-5-5L2 17"/></svg>Popolari</button>
                    <button class="tab" data-filtro-feed="recenti"><svg xmlns="http://www.w3.org/2000/svg" class="icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock-icon lucide-clock"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg>Recenti</button>
                </div>
            </div>

            <div data-contenitore-feed>
            <?php foreach ($Post as $postSingolo): ?>
                <?= $postSingolo->creaPostDrink(); ?>
            <?php endforeach; ?>
                <p class="messaggio-feed-vuoto" data-messaggio-feed-vuoto hidden>Nessun drink da mostrare per questo filtro.</p>
                <div class="sentinella-feed" data-sentinella-feed></div>
            </div>
            <script src="<?= $JS['DrUtili'] ?>"></script>
            <script src="<?= $JS['DrLike'] ?>"></script>
            <script src="<?= $JS['FeedUtils'] ?>"></script>
            <script src="<?= $JS['FeedOrdinamento'] ?>"></script>
            <script src="<?= $JS['FeedScroll'] ?>"></script>
            <script src="<?= $JS['FeedFiltri'] ?>"></script>
        </body>

</html>
