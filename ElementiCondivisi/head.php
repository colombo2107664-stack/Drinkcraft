<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Mette pageTitle se non disponibile per qualche motivo mette solo Drinkcraft -->
    <title><?= $TitoloPagina ?? 'Drinkcraft' ?></title> 

    <link rel="icon" type="image/x-icon" href="/Immagini/favicon.ico">

    
    <link rel="stylesheet" href="/CSS/generale.css">

    <!-- logica CSS specifici della pagina -->
    <?php if (!empty($StilePagina)): ?>
            <link rel="stylesheet" href="<?= $StilePagina ?>">
    <?php endif; ?>
</head>