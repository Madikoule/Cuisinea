<!---- VOici notre constantes relié a notre début du fichier de mon image -->

<!------ voici un tableau avec la valeur titre , valeur description ,valeur image . ------>

<?php
    
    require_once('templates/header.php');
    require_once('lib/recipe.php');


?>



<div class="container col-xxl-8 px-4 py-5">
    <h1>Liste des recettes</h1>

        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <div class="col-10 col-sm-8 col-lg-6">
            <img src="assets/images/logo-cuisinea.jpg" class="d-block mx-lg-auto img-fluid" alt="logo cuisine" width="400" loading="lazy">
        </div>
        <div class="col-lg-6">
            <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3"> Cuisinea-Recette de cuisine</h1>
            <p class="lead"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Concevez et personnalisez rapidement des sites mobiles réactifs avec Bootstrap, la boîte à outils open source frontale la plus populaire au monde, comprenant des variables et des mixins Sass, un système de grille réactif, de nombreux composants prédéfinis et de puissants plugins JavaScript.</font></font></p>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start">
            <a href="recettes.php" class="btn btn-primary btn-lg px-4 me-md-2">Voir nos recette</font></font></a>
        </div>
        </div>
    </div>

    <div class="row">

<!---- je vien faire ma boucle foreach en insérant mes element de mon tableau --->

<?php
    foreach ($recipes as $key => $recipe) { 
    include('templates/recipe_partial.php');

} ?>

    </div>
    

<?php
    require_once('templates/footer.php');
?>