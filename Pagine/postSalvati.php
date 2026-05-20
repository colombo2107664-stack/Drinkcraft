<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    include __DIR__ . "/../" . $elementiCondivisi["drink"];


    $TitoloPagina="Post Salvati";
    $StilePagina= $stile["postSalvati"];

    $listaSalvati=[
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
            
            
            <a href="<?= $pagine['PaginaProfilo'] ?>"><button class="indietro"><svg class = "icon"  xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-undo2-icon lucide-undo-2"><path d="M9 14 4 9l5-5"/><path d="M4 9h10.5a5.5 5.5 0 0 1 5.5 5.5a5.5 5.5 0 0 1-5.5 5.5H11"/></svg>Indietro</button></a>

            <div class="sezioneTitolo">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-bookmark-icon lucide-bookmark"><path d="M17 3a2 2 0 0 1 2 2v15a1 1 0 0 1-1.496.868l-4.512-2.578a2 2 0 0 0-1.984 0l-4.512 2.578A1 1 0 0 1 5 20V5a2 2 0 0 1 2-2z"/></svg>
  
            <h1>I miei drink salvati</h1>
            <h4>Trova i tuoi cocktail preferiti sempre a portata di mano</h4>
            
            </div>

            <div class="controlli-salvati">
                <input type="search" data-input-ricerca-salvati placeholder="Cerca drink">
                <select data-selettore-ordinamento>
                    <option value="data">Ordina per data</option>
                    <option value="categoria">Ordina per categoria</option>
                    <option value="popolarita">Ordina per popolarità</option>
                </select>
            </div>
                        
            <div class="SezioneDrink" data-lista-salvati>
                    <?php foreach ($listaSalvati as $indice => $singolo): ?>
                        <div class="elemento-salvato risultato-drink"
                            data-risultato-salvato
                            data-tipo="drink"
                            data-nome="<?= htmlspecialchars($singolo->getNome()) ?>"
                            data-categoria="<?= htmlspecialchars($singolo->getTipo()) ?>"
                            data-popolarita="<?= htmlspecialchars((string) $singolo->getAzioni()[0]['numero']) ?>"
                            data-data="<?= htmlspecialchars((string) (count($listaSalvati) - $indice)) ?>">
                            <?= $singolo->drinkProfilo(); ?>
                            <button class="bottone-rimuovi-salvato" type="button" data-bottone-rimuovi>Rimuovi</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <p class="messaggio-vuoto-salvati" data-messaggio-vuoto-salvati>Nessun risultato trovato</p>

            </div>
            
            <script src="<?= $JS['SalvatiUtili'] ?>"></script>
            <script src="<?= $JS['SalvatiRimozione'] ?>"></script>
            <script src="<?= $JS['SalvatiOrdinamento'] ?>"></script>
            <script src="<?= $JS['SalvatiRicerca'] ?>"></script>
            
        </body>

</html>
