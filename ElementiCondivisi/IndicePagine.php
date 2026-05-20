<?php

$pagine = [
    "AccediProfilo"         => "/Pagine/AccediProfilo.php",
    "creaDrink"             => "/Pagine/creaDrink.php",
    "CreaProfilo"           => "/Pagine/CreaProfilo.php",
    "Creaprofilo2"          => "/Pagine/Creaprofilo2.php",
    "SingoloDrink"          => "/Pagine/SingoloDrink.php",
    "index"                 => "/Pagine/index.php",
    "IndicePagine"          => "/Pagine/IndicePagine.php",
    "PaginaProfilo"         => "/Pagine/PaginaProfilo.php",
    "partecipazionesfida"   => "/Pagine/partecipazionesfida.php",
    "postSalvati"           => "/Pagine/postSalvati.php",
    "Propostesfide"         => "/Pagine/Propostesfide.php",
    "ricerca"               => "/Pagine/ricerca.php",
    "sfideSettimanali"      => "/Pagine/sfideSettimanali.php",
    "ProfiloPersonale"      => "/Pagine/PaginaProfiloPersonale.php"
];

$elementiCondivisi = [
    "head"                  => "/ElementiCondivisi/head.php",
    "navbar"                => "/ElementiCondivisi/navbar.php",
    "drink"                 => "/ElementiCondivisi/drink.php",
    "sfide"                 => "/ElementiCondivisi/sfide.php",
    "formCreaDrink"         => "/ElementiCondivisi/formCreaDrink.php"
];

$stile = [
    "AccediProfilo"         => "../CSS/AccediProfilo.css",
    "creaDrink"             => "/CSS/CreaDrink.css",
    "CreaProfilo"           => "/CSS/Creaprofilo.css",
    "CreaProfilo2"          => "/CSS/Creaprofilo2.css",
    "drink"                 => "/CSS/InsideDrink.css",
    "index"                 => "/CSS/home.css",
    "PaginaProfilo"         => "/CSS/PaginaProfilo.css",
    "ProfiloPersonale"      => "/CSS/ProfiloPersonale.css",
    "partecipazionesfida"   => "/CSS/partecipazionesfida.css",
    "postSalvati"           => "/CSS/PostSalvati.css",
    "Propostesfide"         => "/CSS/Propostesfide.css",
    "ricerca"               => "/CSS/Ricerca.css",
    "sfideSettimanali"      => "/CSS/Sfidesettimanali.css"
];



$JS = [
    "form"                  => "../JS/form/form.js",
    "DrUtili"               => "../JS/drink/drink-utili.js",
    "DrSalvataggi"          => "../JS/drink/drink-salvataggi.js",
    "DrLike"                => "../JS/drink/drink-like.js",
    "DrCommenti"            => "../JS/drink/drink-commenti.js",
    "DrImmagine"            => "../JS/drink/drink-immagine.js",
    "DrIngredienti"         => "../JS/drink/drink-ingredienti.js",
    "ProfiloUtili"          => "../JS/profilo/profilo-utili.js",
    "ProfiloContatori"      => "../JS/profilo/profilo-contatori.js",
    "ProfiloFollow"         => "../JS/profilo/profilo-follow.js",
    "ProfiloModifica"       => "../JS/profilo/profilo-modifica.js",
    "NavbarUtils"           => "../JS/navbar/navbar-utils.js",
    "NavbarRicerca"         => "../JS/navbar/navbar-ricerca.js",
    "NavbarAttiva"          => "../JS/navbar/navbar-attiva.js",
    "SalvatiUtili"          => "../JS/salva/salvati-utili.js",
    "SalvatiRimozione"      => "../JS/salva/salvati-rimozione.js",
    "SalvatiOrdinamento"    => "../JS/salva/salvati-ordinamento.js",
    "SalvatiRicerca"        => "../JS/salva/salvati-ricerca.js",
    "RicercaUtili"          => "../JS/ricerca/ricerca-utili.js",
    "RicercaRisultati"      => "../JS/ricerca/ricerca-risultati.js",
    "RicercaLive"           => "../JS/ricerca/ricerca-live.js",
    "RicercaSuggerimenti"   => "../JS/ricerca/ricerca-suggerimenti.js",
    "RicercaFiltri"         => "../JS/ricerca/ricerca-filtri.js",
    "RicercaToolbar"        => "../JS/ricerca/ricerca-toolbar.js",
    "RicercaApertura"       => "../JS/ricerca/ricerca-apertura.js",
    "SfideUtili"            => "../JS/sfide/sfide-utili.js",
    "SfideCountdown"        => "../JS/sfide/sfide-countdown.js",
    "FormDrinkUtils"        => "../JS/form/formDrink-utils.js",
    "FormDrinkIngredienti"  => "../JS/form/formDrink-ingredienti.js",
    "FormDrinkPassaggi"     => "../JS/form/formDrink-passaggi.js",
    "FormDrinkValidazione"  => "../JS/form/formDrink-validazione.js",
    "FormDrinkSalvataggio"  => "../JS/form/formDrink-salvataggio.js",
    "FeedUtils"             => "../JS/feed/feed-utils.js",
    "FeedFiltri"            => "../JS/feed/feed-filtri.js",
    "FeedScroll"            => "../JS/feed/feed-scroll.js",
    "FeedOrdinamento"       => "../JS/feed/feed-ordinamento.js",
    "PartecipazioneUtili"   => "../JS/partecipazione/partecipazione-utili.js",
    "PartecipazionePopup"   => "../JS/partecipazione/partecipazione-popup.js",
    "PartecipazioneSceltaDrink"=> "../JS/partecipazione/partecipazione-scelta-drink.js",
    "PartecipazioneNuovoDrink"=> "../JS/partecipazione/partecipazione-nuovo-drink.js",
    "AccediUtils"           => "../JS/Accedi/accedi-utils.js",
    "AccediPassword"        => "../JS/Accedi/accedi-password.js",
    "AccediValidazione"     => "../JS/Accedi/accedi-validazione.js",
    "AccediErrori"          => "../JS/Accedi/accedi-errori.js"
];



$backend = [
    "session"               => "../backend/config/session.php",
    "db"                    => "../backend/config/db.php",
    "database"              => "../backend/database/schema.sql"
];

require_once __DIR__ . "/../" . $backend["session"];
require_once __DIR__ . "/../" . $backend["db"];
?>
