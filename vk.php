<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" href="grafika2.css">
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">	

	</head>
	<body>



	<?php
	include "including.php";

	?>

	<div class="main">
	<form method="post" action="vk.php">
    <label>Jste proelu?</label>
	<br>
	
	<label for="ano">
		<input type="radio" id="ano" name="group1" value="1"> ANO
	</label>
	<br>
	<label for="ne">
		<input type="radio" id="ne" name="group1" value="0"> NE
	</label>
	<br>
	<br>
	<br>

	<label>Jste pro zavedení Eura?</label>
	<br>
	
	<label for="ano">
		<input type="radio" id="ano1" name="group2" value="0"> ANO
	</label>
	<br>
	<label for="ne">
		<input type="radio" id="ne1" name="group2" value="1"> NE
	</label>
	<br>
	<br>
	<br>



	<label>Je naše země nemocná?</label>
	<br>
	
	<label for="ano">
		<input type="radio" id="ano3" name="group3" value="1"> ANO
	</label>
	<br>
	<label for="ne">
		<input type="radio" id="ne3" name="group3" value="0"> NE
	</label>
	<br>
	<br>
	<br>


	<label>Jste proti migraci</label>
	<br>
	
	<label for="ano">
		<input type="radio" id="ano4" name="group4" value="1"> ANO
	</label>
	<br>
	<label for="ne">
		<input type="radio" id="ne4" name="group4" value="0"> NE
	</label>
	<br>
	<br>
	<br>


	<label>Chcete znovuzrodit socialismus</label>
	<br>
	
	<label for="ano">
		<input type="radio" id="ano5" name="group5" value="1"> ANO
	</label>
	<br>
	<label for="ne">
		<input type="radio" id="ne5" name="group5" value="0"> NE
	</label>
	<br>


	<br>
	<br>
	<br>


	<label>Je podle Vás každý další koupený kebab jen dalším krokem k burkám</label>
	<br>
	
	<label for="ano">
		<input type="radio" id="ano5" name="group6" value="1"> ANO
	</label>
	<br>
	<label for="ne">
		<input type="radio" id="ne5" name="group6" value="0"> NE
	</label>
	<br>

	<br>
	<br>
	<br>


	<label>Jaký máte názor na legalizaci marihuany pro rekreační účely?</label>
	<br>
	
	<label for="ano">
		<input type="radio" id="ano7" name="group7" value="0"> ANO
	</label>
	<br>
	<label for="ne">
		<input type="radio" id="ne7" name="group7" value="1"> NE
	</label>
	<br>





	<button type="submit">Odeslat</button>






   </form>

   <?php
		if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$selected_option = isset($_POST["group1"]) ? $_POST["group1"] : "";
		$selected_option2 = isset($_POST["group2"]) ? $_POST["group2"] : "";
		$selected_option3 = isset($_POST["group3"]) ? $_POST["group3"] : "";
		$selected_option4 = isset($_POST["group4"]) ? $_POST["group4"] : "";
		$selected_option5 = isset($_POST["group5"]) ? $_POST["group5"] : "";
		$selected_option6 = isset($_POST["group6"]) ? $_POST["group6"] : "";
		$selected_option7 = isset($_POST["group7"]) ? $_POST["group7"] : "";

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