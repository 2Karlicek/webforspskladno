<?php
session_start();
if (isset($_SESSION['uzivatel']) && isset($_SESSION['heslo'])){
?>
<!DOCTYPE html>
<html>
	<head>

		<link rel="stylesheet" href="grafika2.css">
		<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">	
		<style>
			  .but { 
	  width: 20px;
	  height: 20px; 
	  vertical-align: middle;
  	margin-bottom: 5px;
	font-size: 20px;
   					}
	.but {

	}
	.zvetseny-text {
        font-size: 35px;
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

	<<label class=zvetseny-text>Jste pro zavedení eura?</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group1" value="0"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group1" value="1"> NE
	</label>
	<br>
	<br>
	<br>



	<label class=zvetseny-text>Je naše země nemocná?</label>
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


	<label class=zvetseny-text>Jste proti migraci?</label>
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


	<label class=zvetseny-text>Chcete znovuzrodit socialismus</label>
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


	<label class=zvetseny-text>Je podle Vás každý další kopený kebab je dalším krokem k burkám?</label>
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
	<br>


	<<label class=zvetseny-text>Měla by podle Vás být legalizováná marihuana po lékařské účely?</label>
	<br>
	
	<label for="ano">
		<input type="radio" class="but" id="ano" name="group1" value="0"> ANO
	</label>
	<br>
	<label for="ne">
	<input type="radio" class="but" id="ne" name="group1" value="1"> NE
	</label>
	<br>


	<button type="submit">Odeslat</button>

   </form>


   <?php
            } else {
              ?>
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
	<br>
	<br>
	<br>
	<br>
	<h1>Pro prohlížení se přihlaste, prosím.</h1>
	<a href="prihlaseni.php">prihlaste se</a>
	<br>
	<br>
	<br>
	<br>
	
	

</div>

<?php

include "including2.php"
?>
<?php 
            }
?>


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