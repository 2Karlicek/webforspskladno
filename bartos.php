<?php

session_start();
$_SESSION['previous_page'] = $_SERVER['REQUEST_URI'];

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
	<div class="row">
		<div class="column"><a href="https://cs-cz.facebook.com/tomio.cz/" target="_blank"><img  src="https://1000logos.net/wp-content/uploads/2021/04/Facebook-logo.png"></a></div>
		<div class="column"><a href="https://twitter.com/tomio_cz" target="_blank"><img  src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" ></a></div>
		<div class="column"><a href="https://www.youtube.com/channel/UCe0c2rUjCHtQSf2XY7ulCQA" target="_blank"><img  src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/2560px-YouTube_full-color_icon_%282017%29.svg.png" ></a></div>
	</div>
		<p>arodil se v Tokiu, kam se jeho česká matka Helena Okamurová, rozená Holíková, po svatbě s občanem
		Japonska japonsko-korejského původu Matsuem Okamurou v roce 1966 přestěhovala. V Japonsku však 
		Tomio Okamura strávil necelých 10 let. Většinu života prožil v České republice
		(respektive v Československu).[7] Jeho matka se nesmířila s osamělým životem v 
		Japonsku a vrátila se se svými syny do Československa, když mu bylo</p>

		<img src="https://tomio.cz/wp-content/uploads/2020/02/Tomio_Okamura_8-1-e1588927265909.jpg">
	</div>
<?php

	include "including2.php"
?>
	</body>
</html>