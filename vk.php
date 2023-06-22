<?php
	session_start();
	$_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];
	if (isset($_SESSION['uzivatel']) && isset($_SESSION['heslo'])) {
		?>
<!-- oveří prihlaseni, neupravovat -->
<!DOCTYPE html>
<html>
	<head>

		<link rel="stylesheet" href="grafika2.css">
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<style>
			  .but { 
	  width: 25px;
	  height: 25px; 
	  vertical-align: middle;
  	margin-bottom: 5px;
	font-size: 25px;
   					}
	.but {

	}
	@media screen and (max-width: 600px) {
      .but {width: 15px;
	  height: 15px; 
	  vertical-align: middle;
  	margin-bottom: 5px;
	font-size: 15px;
        
      }
      }
	
	.zvetseny-text {
    
	
		font-size: 35px;
    }
	@media screen and (max-width: 600px) {
      .zvetseny-text {
        font-size: 20px;
      }
      }

	  @media screen and (min-width: 1200px) {
      .default-text {
        font-size: 40px;
      }
    } 
		</style>
	</head>
	<body>



	<?php
	include "including.php";

	?>

	<div class="main">
	<form method="post" action="vk.php">
    <label class=zvetseny-text>Jste proti diktátu Bruselu?</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group1" value="1"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group1" value="0"> NE
	</label>
	<br>
	<br>
	<br>

	<label class=zvetseny-text>Jste pro zavedení eura?</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group2" value="0"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group2" value="1"> NE
	</label>
	<br>
	<br>
	<br>



	<label class=zvetseny-text>Je naše země nemocná?</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group3" value="1"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group3" value="0"> NE
	</label>
	<br>
	<br>
	<br>


	<label class=zvetseny-text>Jste proti migraci?</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group4" value="1"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group4" value="0"> NE
	</label>
	<br>
	<br>
	<br>


	<label class=zvetseny-text>Chcete znovuzrodit socialismus</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group5" value="1"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group5" value="0"> NE
	</label>


	<br>
	<br>
	<br>


	<label class=zvetseny-text>Je podle Vás každý další kopený kebab je dalším krokem k burkám?</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group6" value="1"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group6" value="0"> NE
	</label>
	<br>

	<br>
	<br>
	<br>


	<label class=zvetseny-text>Měla by podle Vás být legalizováná marihuana po lékařské účely?</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group7" value="0"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group7" value="1"> NE
	</label>
	<br>

	<label class=zvetseny-text>Myslíte si, že by politici měli absolvovat povinný kurz stand-up komedie, aby byli lepší ve vtipných rétorických otázkách?</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group8" value="1"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group8" value="0"> NE
	</label>
	<br>

	<label class=zvetseny-text>Myslíte si že, by mělo být zřízeno ministerstvo pro výzkum a vývoj "bezchybných volebních slibů"?</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group9" value="1"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group9" value="0"> NE
	</label>
	<br>

	<label class=zvetseny-text>Jste pro zavedení POVINÝCH gramotnostních testů před možností volit?</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group10" value="0"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group10" value="1"> NE
	</label>
	<br>


	<button type="submit">Odeslat</button>






   </form>
<!-- nasledujicí kod počíta, nepřepisovat -->
   <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$selected_option = isset($_POST["group1"]) ? $_POST["group1"] : "";
		$selected_option2 = isset($_POST["group2"]) ? $_POST["group2"] : "";
		$selected_option3 = isset($_POST["group3"]) ? $_POST["group3"] : "";
		$selected_option4 = isset($_POST["group4"]) ? $_POST["group4"] : "";
		$selected_option5 = isset($_POST["group5"]) ? $_POST["group5"] : "";
		$selected_option6 = isset($_POST["group6"]) ? $_POST["group6"] : "";
		$selected_option7 = isset($_POST["group7"]) ? $_POST["group7"] : "";
		$selected_option8 = isset($_POST["group8"]) ? $_POST["group8"] : "";
		$selected_option9 = isset($_POST["group9"]) ? $_POST["group9"] : "";
		$selected_option10 = isset($_POST["group10"]) ? $_POST["group10"] : "";


		$variable = 0;
		if ($selected_option == 1) {
			$variable += 1;}
	
		
		if ($selected_option2 == 1) {
			$variable += 1;}
			
	
		

		if ($selected_option3 == 1) {
			$variable += 1;}

		if ($selected_option4 == 1) {
			$variable += 1;}

		if ($selected_option5 == 1) {
			$variable += 10;}	
		
		if ($selected_option6 == 1) {
			$variable += 1;}	

		if ($selected_option7 == 1) {
			$variable += 1;}
			
		if ($selected_option8 == 1) {
			$variable += 1;}

		if ($selected_option9 == 1) {
			$variable += 1;}
		
		if ($selected_option10 == 1) {
			$variable += 1;}
		
		else {
			$variable += 0;
		}
			
			echo $variable;
			echo "<br>";

		if($variable < 1){
			echo "Chyba!!";
		}


		
		if ($variable >= 2 && $variable < 10) {
			
			echo "Volte hnutí SPD";
			echo "<br>";
			echo '<img src="https://u-blogidnes.1gr.cz/blogidnes/article/6/39/390606/390606_clanok_foto_140.png?r=27bq"  class="icons">';

		}

		if ($variable >= 10){
			echo "Volte KSČM";
			echo "<br>";
			echo '<img src="https://1gr.cz/fotky/idnes/19/033/cl6h/HYR7a4ae6_13PH_KONECNA_C_ME_PRAHA_8159400_CMYK.jpg"  class="icons">';
		}
		}
	?>


	</div>
<?php

	include "including2.php"
?>
	</body>
</html>
