<?php 
        require_once('lib/config.php');
    
        $currentPage = basename($_SERVER['SCRIPT_NAME']);


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./assets/css/override-bootstrap.css">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Cuisinea</title>

</head>
<body>

<!---- debut du header ------>

<header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <div class="col-md-3 mb-2 mb-md-0">
            <a href="index.php" class="d-inline-flex link-body-emphasis text-decoration-none">
                <img src="assets/images/logo-cuisinea-horizontal.jpg" alt="logo cuisinea" width="250">
            </a>
        </div>

        <ul class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0">
            <?php foreach ($mainMenu as $key => $value) { ?> 
            <li class="nav-item" ><a href=" <?=$key; ?>" class="nav-link"> <?php if ($currentPage === 'index.php'); ?>  <?=$value ;?></a></li>
            <?php } ?>

        </ul>

        <div class="col-md-3 text-end">
            <button type="button" class="btn btn-outline-primary me-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Se connecter</font></font></button>
            <button type="button" class="btn btn-primary"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">S'inscrire</font></font></button>
        </div>
    </div>
</header>