
<?php include __DIR__ ."/IndicePagine.php"; ?>
                <nav class="toolbar">
                <div class="logo"> <img src="../Immagini/logo.jpeg" alt="logo sito"><p class="titolo">Drinkcraft</p></div>
                
                <form class="barraRicerca" action="<?= $pagine['ricerca'] ?>" method="get" data-contenitore-ricerca>
                <input type="search" id="ricerca" name="ricerca" placeholder="Cerca ricette o tag..." data-input-ricerca />
                </form>
                
                <a href="<?= $pagine['index'] ?>" data-navbar-link><button class="bottoneT"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-house-icon lucide-house"><path d="M15 21v-8a1 1 0 0 0-1-1h-4a1 1 0 0 0-1 1v8"/><path d="M3 10a2 2 0 0 1 .709-1.528l7-6a2 2 0 0 1 2.582 0l7 6A2 2 0 0 1 21 10v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"/></svg>Feed</button></a>
                <a href="<?= $pagine['sfideSettimanali'] ?>" data-navbar-link data-pagine-attive="<?= $pagine['sfideSettimanali'] ?>,<?= $pagine['Propostesfide'] ?>,<?= $pagine['partecipazionesfida'] ?>"><button class="bottoneT"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-trophy-icon lucide-trophy"><path d="M10 14.66v1.626a2 2 0 0 1-.976 1.696A5 5 0 0 0 7 21.978"/><path d="M14 14.66v1.626a2 2 0 0 0 .976 1.696A5 5 0 0 1 17 21.978"/><path d="M18 9h1.5a1 1 0 0 0 0-5H18"/><path d="M4 22h16"/><path d="M6 9a6 6 0 0 0 12 0V3a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1z"/><path d="M6 9H4.5a1 1 0 0 1 0-5H6"/></svg>Sfide</button></a>
                <a href="<?= $pagine['AccediProfilo'] ?>" data-navbar-link data-pagine-attive="<?= $pagine['AccediProfilo'] ?>,<?= $pagine['PaginaProfilo'] ?>,<?= $pagine['postSalvati'] ?>"><button class="bottoneT"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-user-round-icon lucide-user-round"><circle cx="12" cy="8" r="5"/><path d="M20 21a8 8 0 0 0-16 0"/></svg>Profilo</button></a> 
                </nav>
                <script src="<?= $JS['NavbarUtils'] ?>"></script>
                <script src="<?= $JS['NavbarRicerca'] ?>"></script>
                <script src="<?= $JS['NavbarAttiva'] ?>"></script>
