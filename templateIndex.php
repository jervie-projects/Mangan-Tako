<?php 
    require_once "../PHPMIDTERM/Header.php";
    include "../PHPMIDTERM/data/data.php";

  	// ITERATE OVER DATASET AND FILTER BASED ON ID
  	foreach ($indexrecipe as $food) {
  		if ($food["id"] == $_GET["id"]){
  			$this_food = $food;
  		}
  	}

 ?>


<div class="content my-md-5 pt-md-5">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<h1 class="fst-italic fw-bold mb-4"><?php echo $this_food["name"];?></h1>
				</div>
			</div>
		</div>
	</div>

	<div class="recipes mt-5">
		<div class="container">
			<div class="recipe mb-4">
				<div class="row">
					<div class="col-md-4 mb-3 mb-md-0">
						<div class="image-container h-100">
							<img src="<?php echo $this_food["image"]; ?>" alt="Kare-kare" class="img-fluid object-fit-cover h-100 w-100">
						</div>
					</div>
					<div class="col-md-7">
						<div class="text-container">
							<h5><?php echo $this_food["description"]; ?></h5>
							<p>
                            	<?php echo $this_food["sentence"]; ?>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="recipes mt-5">
		<div class="container">
			<div class="recipe mb-4">
				<div class="row">
					<div class="col-md-4 mb-3 mb-md-0">
						<div class="text-container">
							<h3><?php echo $this_food["ingredients"]; ?></h3>
							<ul>
                                <?php echo $this_food["list_ingredients"]; ?>
							</ul>
						</div>
					</div>
					<div class="col-md-7">
						<div class="text-container">
							<h3><?php echo $this_food["directions"]; ?></h3>
							<ol>
                            <?php echo $this_food["list_directions"]; ?>							
							</ol>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="pre-recipe py-4 text-white text-center">
		<div class="container">
			<h2 class="fs-3 f-mono fw-bold fst-italic">Discover Food Recipes</h2> 
			<p class="m-0">Explore the bitterness of each Deluxe Food</p> 
		</div>
	</div>
</div>

	<div id="carouselExampleDark" class="carousel carousel-dark slide mb-5">
	  	<div class="carousel-indicators">
	    	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	    	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
	    	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
	    	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
	    	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="4" aria-label="Slide 5"></button>
	    	<button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="5" aria-label="Slide 6"></button>
	  	</div>
	  	<div class="carousel-inner">
	    	<div class="carousel-item active" data-bs-interval="10000">
	    		<a href="item-page-2.php">
	      			<img src="Images/image-2.png" class="d-block mx-auto mt-5 w-75" alt="Adobo">
	      		</a>
	      	<div class="carousel-caption d-none d-md-block">
	        	<h5 class="fw-bold bg-white">Adobo</h5>
	      	</div>
	    </div>
	    <div class="carousel-item" data-bs-interval="2000">
	    	<a href="item-page-3.php">
	      		<img src="Images/image-3.png" class="d-block mx-auto mt-5 w-75" alt="Cassava Cake">
	      	</a>
	      	<div class="carousel-caption d-none d-md-block">
	        	<h5 class="fw-bold bg-white">Cassava Cake</h5>
	      	</div>
	    </div>
	    <div class="carousel-item">
	    	<a href="item-page-4.php">
	      		<img src="Images/image-4.png" class="d-block mx-auto mt-5 w-75" alt="Pork Sisig">
	      	</a>
	      	<div class="carousel-caption d-none d-md-block">
	        	<h5 class="fw-bold bg-white">Pork Sisig</h5>
	      	</div>
	    </div>
	    <div class="carousel-item">
	    	<a href="item-page-5.php">
	      		<img src="Images/image-5.png" class="d-block mx-auto mt-5 w-75" alt="Sinigang">
	      	</a>
	      	<div class="carousel-caption d-none d-md-block">
	        	<h5 class="fw-bold bg-white">Sinigang</h5>
	      	</div>
	    </div>
	    <div class="carousel-item">
	    	<a href="item-page-6.php">
	      		<img src="Images/image-6.png" class="d-block mx-auto mt-5 w-75" alt="Leche Flan">
	      	</a>
	      	<div class="carousel-caption d-none d-md-block">
	        	<h5 class="fw-bold bg-white">Leche Flan</h5>
	      	</div>
	    </div>
	    <div class="carousel-item">
	    	<a href="item-page-7.php">
	      		<img src="Images/image-7.png" class="d-block mx-auto mt-5 w-75" alt="Arroz Caldo">
	      	</a>
	      	<div class="carousel-caption d-none d-md-block">
	        	<h5 class="fw-bold bg-white">Arroz Caldo</h5>
	      	</div> 
	    </div>
	  	</div>
	  		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
	    	<span class="carousel-control-prev-icon" aria-hidden="true"></span>
	    	<span class="visually-hidden">Previous</span>
	  	</button>
	  	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
	    	<span class="carousel-control-next-icon" aria-hidden="true"></span>
	    	<span class="visually-hidden">Next</span>
	  	</button>
	</div>





<?php
    include "../PHPMIDTERM/Footer.php";
?>