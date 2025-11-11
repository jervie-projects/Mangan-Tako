<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php include "Header.php"; ?>


    <div class="container my-md-5 pt-md-5">
        <div class="row">
            <div class="col-md-5">
                <h1 class="fst-italic fw-bold mb-4">Recipe Lists</h1>
            </div>
            <div class="col-md-3">
                <div class="input-group mb-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search for recipes..." aria-label="Search for recipes" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary btn-color" type="button" id="button-addon2">Search</button>
                </div>
            </div>

           <div class="col-md-2">
                <a href="item-add-page.php">
                    <button type="button" class="btn btn-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"></path>
                          <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4"></path>
                        </svg>
                        Add Recipe
                    </button>
                </a>
            </div>

            <div class="col-md-2">
                <a href="item-edit-page.php">
                    <button type="button" class="btn btn-color">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash-circle" viewBox="0 0 16 16">
                          <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                          <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8"/>
                        </svg>
                        Delete Recipe
                    </button>
                </a>
            </div> 
        </div>
    </div>

    <div class="recipes mt-5">
        <div class="container">
            <div class="row">
   
    <?php 
    include "../PHPMIDTERM/data/data.php";
    foreach ($recipe as $recipe){
    ?>
    
    <div class="col-md-4 mb-4">
        <div class="image-container h-100">
            <figure class="figure">
                <a href="templateRecipe.php?id=<?php echo $recipe["id"]; ?>">
                    <img src="<?php echo $recipe["image"];?>" alt="<?php echo $recipe["alt"];?>" class="img-fluid object-fit-cover h-100 w-100">
                </a>
                <figcaption class="figure-caption text-center fw-bold"><?php echo $recipe["name"];?></figcaption>
            </figure>
        </div>
    </div>			
            
	<?php } ?>
    <?php include "Footer.php"; ?>  

<script>
    document.getElementById('searchInput').addEventListener('input', function() {
        var searchInput = this.value.toLowerCase();
        var recipes = document.querySelectorAll('.figure-caption');

        recipes.forEach(function(recipe) {
            var recipeName = recipe.textContent.toLowerCase();
            var parentColumn = recipe.closest('.col-md-4');
            if (recipeName.includes(searchInput)) {
                parentColumn.style.display = 'block';
            } 
            else {
                parentColumn.style.display = 'none';
            }
        });
    });
</script>
</body> 
</html>

