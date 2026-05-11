<?php 
    require __DIR__ ."/../ElementiCondivisi/IndicePagine.php";
    include __DIR__ . "/../" . $elementiCondivisi["sfide"];
    $TitoloPagina=" Sfide Drinkcraft";
    $StilePagina= $stile["sfideSettimanali"];
?>

<!DOCTYPE html>
<html lang="it">
    <?php require_once __DIR__ . "/../" . $elementiCondivisi["head"];?>
        <body>
            <?php require_once __DIR__ . "/../" . $elementiCondivisi["navbar"];?>
            

            <div class="sfidesettimanali">
                <div class="sfide-scritte">
                    <h1>Sfide Settimanali</h1>
                <p>Partecipa alle challenge tematiche e vinci badge esclusivi per il tuo profilo</p>
                </div>     
            </div>

            <?php
                $sfide = [
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

            <?php foreach ($sfide as $sfida): ?>
                <?= $sfida->creaPostSfida(); ?>
            <?php endforeach; ?>


        </body>
</html>