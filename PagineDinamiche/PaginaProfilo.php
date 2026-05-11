<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    include __DIR__ . "/../" . $elementiCondivisi["drink"];
    include __DIR__ . "/../" . $elementiCondivisi["sfide"];

    $TitoloPagina=" Profilo Drinkcraft";
    $StilePagina= $stile["PaginaProfilo"];
    
 

    $listaDrink=[
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
                            ],
                            //VARIAZIONI
                            [
                                'svg' => 'M825.6 460.8c-12.8 0-32 6.4-44.8 12.8l-115.2-108.8c6.4-19.2 12.8-38.4 12.8-57.6 0-64-51.2-121.6-121.6-121.6-64 0-121.6 51.2-121.6 121.6 0 44.8 19.2 76.8 51.2 102.4L409.6 640h-6.4c-25.6 0-51.2 6.4-70.4 19.2L243.2 582.4c6.4-12.8 6.4-19.2 6.4-32 0-51.2-38.4-89.6-89.6-89.6-51.2 0-89.6 38.4-89.6 89.6 0 51.2 38.4 89.6 89.6 89.6 19.2 0 32-6.4 44.8-12.8L294.4 704c-6.4 12.8-12.8 32-12.8 51.2 0 64 51.2 121.6 121.6 121.6 64 0 121.6-51.2 121.6-121.6 0-44.8-19.2-76.8-51.2-102.4l76.8-230.4h6.4c25.6 0 44.8-6.4 64-19.2L736 512c-6.4 12.8-6.4 19.2-6.4 32 0 51.2 38.4 89.6 89.6 89.6 51.2 0 89.6-38.4 89.6-89.6s-32-83.2-83.2-83.2z m-409.6 352c-32 0-57.6-25.6-57.6-57.6s25.6-57.6 57.6-57.6 57.6 25.6 57.6 57.6-25.6 57.6-57.6 57.6z',
                                'numero' => 12,
                                'label' => 'varianti'
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
            ],
            //VARIAZIONI
            [
                'svg' => 'M12 2l4 4-4 4-4-4zM4 10h16v4H4zM12 22l-4-4 4-4 4 4z',
                'numero' => 6,
                'label' => 'varianti'
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
            ],
            //VARIAZIONI
            [
                'svg' => 'M12 2l4 4-4 4-4-4zM4 10h16v4H4zM12 22l-4-4 4-4 4 4z',
                'numero' => 15,
                'label' => 'varianti'
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
            'tempo_icon' => '/Immagini/recenti2.png',
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
            ],
            //VARIAZIONI
            [
                'svg' => 'M12 2l4 4-4 4-4-4zM4 10h16v4H4zM12 22l-4-4 4-4 4 4z',
                'numero' => 7,
                'label' => 'varianti'
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
            ],
            //VARIAZIONI
            [
                'svg' => 'M12 2l4 4-4 4-4-4zM4 10h16v4H4zM12 22l-4-4 4-4 4 4z',
                'numero' => 11,
                'label' => 'varianti'
            ]
        ],
        //DIFFICOLTA
        'Facile'
    )];
                
    $premi =[
            //Primavera Mediterranea
            new Sfida(
                "Primavera Mediterranea",
                "Crea un drink che celebri i sapori freschi del Mediterraneo usando almeno un agrume e un'erba aromatica",
                "15 Apr",
                127,
                "Badge esclusivo",
                "../Immagini/mediterraneo.png",
                "mediterraneo",
                "Maestro Mediterraneo",
                "../Immagini/PrimaveraMediterranea.png",
                "Primavera Mediterranea",
                $pagine['partecipazionesfida'],
                $pagine['Propostesfide']
            ),
            //Maestro Analcolico
            new Sfida(
                "Zero Alcool, Massimo Gusto",
                "Sfida la creatività con un mocktail analcolico che sorprenda per complessità e presentazione",
                "22 Apr",
                89,
                "Badge esclusivo",
                "../Immagini/no_alcool.png",
                "Analcolico",
                "Maestro Analcolico",
                "../Immagini/Analcolicosfida.png",
                "Analcolico",
                $pagine['partecipazionesfida'],
                $pagine['Propostesfide']
            ),
            //Vintage Master
            new Sfida(
                "Vintage Revival",
                "Reinterpreta un classico degli anni '50-'60 con un tocco moderno e sorprendente",
                "29 Apr",
                156,
                "Badge esclusivo",
                "../Immagini/vintage.png",
                "Vintage Master",
                "Vintage Master",
                "../Immagini/Vintagesfida.png",
                "Sfida Vintage",
                $pagine['partecipazionesfida'],
                $pagine['Propostesfide']
            )
            ];
    
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            

            <div class="sfondoProfilo">
                <img class="fotoProfilo" src="../Immagini/lincolnBarrows.png">
                <div class="salvati"><a href="<?= $pagine['postSalvati'] ?>"><button> Vedi i tuoi drink salvati  
                    <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M7 4c-.4.4-.4 1 0 1.4L13.6 12 7 18.6c-.4.4-.4 1 0 1.4s1 .4 1.4 0l7-7c.4-.4.4-1 0-1.4l-7-7c-.4-.4-1-.4-1.4 0z"/>
                    </svg>
                </button>
                </a>
                </div>
                

                    <div class="nomeETag">
                    <p class="nomeUtente">Lincoln Barrows</p>
                    <p class="tagProfilo"> @viva_le_evasioni </p>
                    </div>
                    <div class="informazioni">
                    <div class="follower"> 
                        <div class="dati">
                            <img src="../Immagini/followers.png">
                            <p>Follower</p>
                            <span>1.2K</span>
                        </div>
                        <div class="dati">
                            <img src="../Immagini/seguiti.png">
                            <p>Seguiti</p>
                            <span>500</span>
                        </div>
                        <div class="dati">
                            <img src="../Immagini/post.png">
                            <p>Drink</p>
                            <span>3</span>
                        </div>
                        <div class="dati">
                            <img src="../Immagini/trofei.png">
                            <p>Trofei</p>
                            <span>5</span>
                        </div>
                    </div>
                    
                    <div class="descrizione">
                        <span> Biografia </span>
                        <p>Appassionato di sedie elettriche e fughe dalla prigione, con una vasta collezione di ricette e
                           una passione per la sperimentazione. Amo condividere le mie creazioni  insieme a mio fratello 
                           e quella fica della ragazza (che mi scopo a sua insaputa)
                        </p>
                    </div>

                    </div>
                    
                    <div class="premi"> 
                        <div class="titoloSezPremi">Trofei ottenuti</div>
                        <?php foreach ($premi as $trofeo): ?>
                        <?= $trofeo->creaPremioOttenuto(); ?>
                        <?php endforeach; ?>
                        
                        <div class="singoloPremio"> <img class="immPremio" src="../Immagini/aggiungi_drink.png"> <div class="testoPremio">+ 2 altri</div></div>
                    </div>
                
            </div>
            

                <p class="titoloPost">I miei drink</p>
                <div class="SezioneDrink">

                <?php foreach ($listaDrink as $singolo): ?>
                    <?= $singolo->drinkProfilo(); ?>
                <?php endforeach; ?>

                <a href="<?= $pagine['creaDrink'] ?>"><button class="postDrink">
                        <img src="../Immagini/aggiungi_drink.png">
                        <p>Aggiungi Drink</p> 
                    </button></a>


            </div>
            
        
            
        </body>

</html>

