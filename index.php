<!---- VOici notre constantes relié a notre début du fichier de mon image -->

<!------ voici un tableau avec la valeur titre , valeur description ,valeur image . ------>

<?php
    define('_RECIPES_IMG_PATH_', 'uploads/recipes/'); 

    $recipes = [
        ["title" => 'Mousse au chocolat', 'description' => " Mousse quick example text to build on the card " , "image" => "1-chocolate-au-mousse.jpg" ],
        ["title" => 'Gratin dauphinois', 'description' => "Gratin quick example text to build on the card " , "image" => "2-gratin-dauphinois.jpg" ],
        ["title" => 'Salade de chèvre ', 'description' => " Salade quick example text to build on the card " , "image" => "3-salade.jpg" ],
    ];


    include('templates/header.php');
?>


    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="logo cuisine" width="400" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;"> Cuisinea-Recette de cuisine</font></font></h1>
            <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Concevez et personnalisez rapidement des sites mobiles réactifs avec Bootstrap, la boîte à outils open source frontale la plus populaire au monde, comprenant des variables et des mixins Sass, un système de grille réactif, de nombreux composants prédéfinis et de puissants plugins JavaScript.</font></font></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <button type="button" class="btn btn-primary btn-lg px-4 me-md-2"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Voir nos recette</font></font></button>
        </div>
        </div>
    </div>
    
    <main>

    <div class="row">

<!---- je vien faire ma boucle foreach en insérant mes element de mon tableau --->

<?php
    foreach ($recipes as $key => $recipe) { ?>

<div class=" col-md-4">
            <div class="card" style="width: 18rem;">
                <img src="<?= _RECIPES_IMG_PATH_ .$recipe['image']; ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $recipe['title']; ?></h5>
                    <p class="card-text"> <?= $recipe['description']; ?></p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    

<?php } ?>

</main>
    

<?php
    include('templates/footer.php');
?>