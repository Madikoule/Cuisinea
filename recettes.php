
<?php


    require_once('templates/header.php');
    require_once('lib/recipe.php');
?>

    
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
        <h1>Liste des recettes</h1>
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