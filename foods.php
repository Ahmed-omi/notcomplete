<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Categories!</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
	<!-- <meta http-equiv="refresh" content="1"> -->

	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Bree+Serif&display=swap" rel="stylesheet">


	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

	<link rel="stylesheet" href="css/style.css">


</head>
<body>

	<?php require('chunks/login-modal.php'); ?>


	<?php require('chunks/register-modal.php'); ?>


	<?php require('chunks/info-modal.php'); ?>


	<?php require('chunks/navbar.php'); ?>

	<?php require('chunks/banner-slider.php'); ?>


	<section class="fcards">
		<div class="row" style="padding-left: 50px; padding-right: 50px;">
		<div class="col s12 m12 l4" style="padding: 50px 5px;">
		<div class="card">
		<div class="card-image waves-effect waves-block waves-light">
 </div>
		<div class="card-content">
	  <span class="card-title activator grey-text text-darken-4">Régime alimentaire<i class="material-icons right">more_vert</i></span>
	  <div class="card-content">
			<a id="btnRegime" href="#regime"</a>
	 				<div class="categories">
	 					<img src="logo.png" class="item-image" />
	 					<div class="image-title"> Regime </div>
	 				</div>
	 			</a>
 </div>
 </div>
	 <div class="card-reveal">
		 <span class="card-title grey-text text-darken-4">Tous<i class="material-icons right">close</i></span>
    <ul>
				<li>
				<a  href="#">Tous</a>
				</li>
        <li>
        <a  id="btnRepas" href="#repas"></a>
    </li>
         <li>
         <a  href="#">Sans Lactose</a>
    </li>
         <li>
         <a  href="#">Sans Gluten</a>
    </li>
    </ul>
  </div>
</div>
	</div>
			  <div class="col s12 m12 l4" style="padding: 50px 5px;">
				<div class="card">
				<div class="card-image waves-effect waves-block waves-light">
 </div>
				<div class="card-content">
			  <span class="card-title activator grey-text text-darken-4">Continent d'origine<i class="material-icons right">more_vert</i></span>
				<div class="card-content">
					<a id="btnOrigine" href="#origine">
							<div class="categories">
								<img src="logo.png" class="item-image" />
								<div class="image-title"> Origine </div>
							</div>
						</a>

	</div>
</div>
				 <div class="card-reveal">
				 <span class="card-title grey-text text-darken-4">D'origine<i class="material-icons right">close</i></span>
				<ul>
          <li>
          <a  href="#">Europe</a>
        </li>
          <li>
          <a  href="#">Asia</a>
        </li>
          <li>
          <a  href="#">Latin America</a>
        </li>
        </ul>

				    </div>
				  </div>
			</div>
			<div class="col s12 m12 l4" style="padding: 50px 5px;">
				<div class="card">
				    <div class="card-image waves-effect waves-block waves-light">

				    </div>
				    <div class="card-content">
				      <span class="card-title activator grey-text text-darken-4">Repas<i class="material-icons right">more_vert</i></span>
				      <div class="card-content">
								<a id="btnRepas" href="#repas">
					 	 				<div class="categories">
					 	 					<img src="logo.png" class="item-image" />
					 	 					<div class="image-title"> Repas </div>
					 	 				</div>
					 	 			</a>

			        </div>
				    </div>
				    <div class="card-reveal">
				      <span class="card-title grey-text text-darken-4">Repas<i class="material-icons right">close</i></span>


	<ul>
    <li>
      <a  href="#">Tous</a>
  </li>
    <li>
      <a  href="#">petit-déjeuner</a>
  </li>
    <li>
     <a  href="#">Plat</a>
  </li>
	  <li>
     <a  href="#">Dessert</a>
  </li>
 </ul>

						</div>
          </div>
			</div>
	</div>
</section>



	<?php require('chunks/foods.php'); ?>


	<?php require('chunks/footer.php'); ?>

	<script>


	var Push  = document.getElementById("btnpush")
	    var regime = document.getElementById("regime");
	      var origine = document.getElementById("origine");
	        var repas = document.getElementById("repas");

	    document.getElementById("btnRegime").addEventListener("click", function(){


	        regime.style.display="block";
	        origine.style.display="none";
	        repas.style.display="none";


	    })


	 document.getElementById("btnOrigine").addEventListener("click", function(){


	   regime.style.display="none";
	   origine.style.display="block";
	   repas.style.display="none";

	} )

	 document.getElementById("btnRepas").addEventListener("click", function(){


	   regime.style.display="none";
	   origine.style.display="none";
	   repas.style.display="block";


	} )


	document.getElementById("btnpush").addEventListener("click", function(){


	  regime.style.display="block";
	  origine.style.display="block";
	  repas.style.display="block";

	} )

	</script>

	<script
	  src="https://code.jquery.com/jquery-3.4.1.min.js"
	  integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
	  crossorigin="anonymous"></script>

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

    <script src="js/loaders.js"></script>
    <script src="js/ajax.js"></script>
</body>
</html>
