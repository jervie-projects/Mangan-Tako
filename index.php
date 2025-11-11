<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
	<?php include "Header.php"; ?>

	<div class="pre-recipe py-4 text-white text-center">
		<div class="container">
			<h2 class="fs-3 f-mono fw-bold fst-italic">Discover Food Recipes</h2> 
			<p class="m-0">Explore the bitterness of each Deluxe Food</p> 
		</div>
	</div>

	<?php 
	include "../PHPMIDTERM/data/data.php";
	foreach ($indexrecipe as $indexrecipe){
	?>
		<div class="recipes mt-5">
			<div class="container">
				<div class="recipe mb-4">
					<div class="row">
						<div class="col-md-4 mb-3 mb-md-0">
							<div class="image-container h-100">
								<a href="templateIndex.php?id=<?php echo $indexrecipe["id"]; ?>">
									<img src="<?php echo $indexrecipe["image"];?>" alt="<?php echo $indexrecipe["alt"];?>" class="img-fluid object-fit-cover h-100 w-100">
								</a>
							</div>
						</div>
						<div class="col-md-7">
							<div class="text-container">
								<h3><?php echo $indexrecipe["name"];?></h3>
								<p>
									<?php echo $indexrecipe["sentence"];?>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	<?php } ?>


	<?php include "Footer.php"; ?>
	
</body>
</html>