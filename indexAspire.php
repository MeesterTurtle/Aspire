<?php
include_once 'ConnectDatabase.php';

?>

<!DOCTYPE html>
	<html>
		<head>
	
			<title>Vuurwerkshop Home</title>
			<link rel="stylesheet" href="cssAspire.css">
	<script>
				var slideIndex = 1;
				showSlides(slideIndex);

				// Next/previous controls
				function plusSlides(n) {
				showSlides(slideIndex += n);
				}

				// Thumbnail image controls
				function currentSlide(n) {
				showSlides(slideIndex = n);
				}

				function showSlides(n) {
				var i;
				var slides = document.getElementsByClassName("mySlides");
				  var dots = document.getElementsByClassName("dot");
				  if (n > slides.length) {slideIndex = 1} 
				  if (n < 1) {slideIndex = slides.length}
				  for (i = 0; i < slides.length; i++) {
					  slides[i].style.display = "none"; 
				  }
				  for (i = 0; i < dots.length; i++) {
					  dots[i].className = dots[i].className.replace(" active", "");
				  }
				  slides[slideIndex-1].style.display = "block"; 
				  dots[slideIndex-1].className += " active";
				}
			</script>
		
		
			
			
			
			

	
	
	
		</head>
	
				<body background= "images/logo-vuurwerk.jpg" onload="currentSlide(1)">
					<header>
					<a href="indexAspire.php">
					
					
						<div id="logo_container">
						<img id="logo"src="images/aspire.jpg" alt="logo">
						</div>
						</a>
						<div id="titel">
						<h1>Vuurwerk Shop</h1>
			
						<a href="winkelwagen.php" alt="winkelwagen"
						<div id="winkelwagen">
						winkelwagen
						</div>
						</a>
		
					</header>
					
					<nav>
					<div class="navbar">
					<a href="indexAspire.php">Home</a>
					
					<div class="dropdown">
					</div>
					<button class="dropbtn">Vuurwerk
					<i class="fa fa-caret-down"></i>
					</button>
				
					<div class="dropdown-content">
					</div>
<?php
			
			$query3 = "SELECT DISTINCT  categorie FROM product" ;
			
			$result = $db->query($query3);
			if ($result->num_rows > 0) {

				while($row = $result->fetch_assoc()) {
			
					 echo '<a href="categorieAspire.php?cat=' . $row['categorie'] . '">' . $row['categorie'] . 'vuurwerk';
					 echo '</a>';

				}}
?>
				<a href="categorieAspire.php?cat=alles">Ons Producten</a>
			
				<!-- <a href="categorieAspire.php?cat=sier">sier vuurwerk</a>
				  <a href="categorieAspire.php?cat=knal">knal vuurwerk</a>
				  <a href="categorieAspire.php?cat=alles">Ons Producten</a>-->
			</div>
					
					<a href="contactAspire.php">Contact</a>
					<a href="certifiedAspire.php">Certiefied</a>
					<a href="overzuchtAspire.php">Overzicht</a>
					<a href="toeveogenAspire.php">Toevoegen</a>
					<a href="verwijderAspire.php">Verwijder</a>
					
		
					
					 <!-- de zoekbak-->
					 <form id="zoekbalk"> 
					 <input type="text" name="zoek">
					 <input type="submit" value="zoeken">
					 </form>
		
		
		
		
		
		
		
		
		
						
					<main>
						
					<!-- Slideshow container -->
					<div class="slideshow-container">

					<!-- Full-width images with number and caption text -->
					<div class="mySlides fade">
					<div class="numbertext">1 / 3</div>
					<img class="center" src="images/sier1.png" style="width:200px">
					<div class="text"></div>
					</div>

					<div class="mySlides fade">
					<div class="numbertext">2 / 3</div>
					<img class="center" src="images/knal2.png" style="width:200px;">
					<div class="text"></div>
					</div>

					<div class="mySlides fade">
					<div class="numbertext">3 / 3</div>
					<img class="center "src="images/sier3.png" style="width:200px;">
					<div class="text"></div>
					</div>

					<!-- Next and previous buttons -->
					<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
					<a class="next" onclick="plusSlides(1)">&#10095;</a>
					</div>
					<br>

					<!-- The dots/circles -->
					<div style="text-align:center">
					<span class="dot" onclick="currentSlide(1)"></span> 
					<span class="dot" onclick="currentSlide(2)"></span> 
					<span class="dot" onclick="currentSlide(3)"></span> 
					</div>
						

						
					</main>
						
						
		
		
		
		
		
		
		
	</body>
</html>		