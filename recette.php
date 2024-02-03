


<?php

    require_once('templates/header.php');
    require_once('lib/recipe.php');

    $id = $_GET['id'];

    $query = $pdo ->prepare("SELECT * FORM recipes WHERE id = :id");
    $query ->binParam(': id', $id, PDO::PARAM_INT);
    $query ->execute();
    $recipe = $query ->fetch();

?>

    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="<?=_RECIPES_IMG_PATH_.$recipes[$id]['image']; ?>" class="d-block mx-lg-auto img-fluid" alt="Thèmes d'amorçage" width="700" height="500" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><?= $recipes[$id]['title'];?></h1>
                <p class="lead"><?=$recipes[$id]['description']; ?><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Concevez et personnalisez rapidement des sites mobiles réactifs avec Bootstrap, la boîte à outils open source frontale la plus populaire au monde, comprenant des variables et des mixins Sass, un système de grille réactif, de nombreux composants prédéfinis et de puissants plugins JavaScript.</font></font></p>
        </div>
        </div>
        

<?php
    require_once('templates/footer.php');
?>

    </div>