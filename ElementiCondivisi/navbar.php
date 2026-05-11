
<?php include __DIR__ ."/IndicePagine.php"; ?>
                <nav class="toolbar">
                <div class="logo"> <img src="../Immagini/logo.jpeg" alt="logo sito"><p class="titolo">Drinkcraft</p></div>
                
                <form class="barraRicerca" action="<?= $pagine['ricerca'] ?>" method="get">
                <input type="search" id="ricerca" name="ricerca" placeholder="Cerca ricette o tag..." />
                </form>
                
                <a href="<?= $pagine['index'] ?>"><button class="bottoneT"><img src="../Immagini/home.png">Feed</button></a>
                <a href="<?= $pagine['sfideSettimanali'] ?>"><button class="bottoneT"><img src="../Immagini/sfide2.png">Sfide</button></a>
                <a href="<?= $pagine['AccediProfilo'] ?>"><button class="bottoneT"><img src="../Immagini/profilo2.png">Profilo</button></a> 
                </nav>