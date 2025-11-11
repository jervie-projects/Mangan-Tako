<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php include "Header.php"; ?>
    

    <div class="pre-recipe py-4 text-white text-center">
        <div class="container">
            <h2 class="fs-3 f-mono fw-bold fst-italic">Craft your culinary Recipe</h2> 
            <p class="m-0">Indulge in the exquisite flavors of your own creations</p> 
        </div>
    </div>

    <div class="content my-md-4 pt-md-4 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <h3 class="fw-bold mb-4 text-center">Add Recipe</h3>
                    <form>
                        <div class="mb-3">
                            <label for="recipeName" class="form-label">Recipe Name</label>
                            <input type="text" class="form-control" id="recipeName">
                        </div>
                        <div class="mb-3">
                            <label for="recipeDescription" class="form-label">Recipe Description</label>
                            <textarea class="form-control" id="recipeDescription" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="recipeIngredients" class="form-label">Recipe Ingredients</label>
                            <textarea class="form-control" id="recipeIngredients" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="procedure" class="form-label">Procedure</label>
                            <textarea class="form-control" id="procedure" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="imageUpload" class="form-label">Upload Image</label>
                            <input class="form-control" type="file" id="imageUpload">
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?php include "Footer.php"; ?>
</body>
</html>
