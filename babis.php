<?php
	session_start();
	if (isset($_SESSION['uzivatel']) && isset($_SESSION['heslo'])) {
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
		<h1>Babiš</h1>
	<div class="row">
		<div class="column"><a href="https://www.facebook.com/AndrejBabis/?locale=cs_CZ" target="_blank"><img  src="https://1000logos.net/wp-content/uploads/2021/04/Facebook-logo.png"></a></div>
		<div class="column"><a href="https://twitter.com/AndrejBabis" target="_blank"><img  src="https://help.twitter.com/content/dam/help-twitter/brand/logo.png" ></a></div>
		<div class="column"><a href="https://www.youtube.com/@anobudelip" target="_blank"><img  src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/09/YouTube_full-color_icon_%282017%29.svg/2560px-YouTube_full-color_icon_%282017%29.svg.png" ></a></div>
	</div>
    <p>
	Andrej Babiš je český politik a podnikatel slovenského
        původu, od prosince 2017 do prosince 2021 předseda
        vlády České republiky. Od října 2013 je poslancem
        Parlamentu České republiky a v letechAndrej Babiš je český politik a podnikatel slovenského
        původu, od prosince 2017 do prosince 2021 předseda
        vlády České republiky. Od října 2013 je poslancem
        Parlamentu České republiky a v letechAndrej Babiš je český politik a podnikatel slovenského
        původu, od prosince 2017 do prosince 2021 předseda
        vlády České republiky. Od října 2013 je poslancem
        Parlamentu České republiky a v letechAndrej Babiš je český politik a podnikatel slovenského
        původu, od prosince 2017 do prosince 2021 předseda
        vlády České republiky. Od října 2013 je poslancem
        Parlamentu České republiky a v letechAndrej Babiš je český politik a podnikatel slovenského
        původu, od prosince 2017 do prosince 2021 předseda
        vlády České republiky. Od října 2013 je poslancem
        Parlamentu České republiky a v letechAndrej Babiš je český politik a podnikatel slovenského
        původu, od prosince 2017 do prosince 2021 předseda
        vlády České republiky. Od října 2013 je poslancem
        Parlamentu České republiky a v letechAndrej Babiš je český politik a podnikatel slovenského
        původu, od prosince 2017 do prosince 2021 předseda
        vlády České republiky. Od října 2013 je poslancem
        Parlamentu České republiky a v letechAndrej Babiš je český politik a podnikatel slovenského
        původu, od prosince 2017 do prosince 2021 předseda
        vlády České republiky. Od října 2013 je poslancem
        Parlamentu České republiky a v letechAndrej Babiš je český politik a podnikatel slovenského
        původu, od prosince 2017 do prosince 2021 předseda
        vlády České republiky. Od října 2013 je poslancem
        Parlamentu České republiky a v letech
    </p>

    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Andrej_Babi%C5%A1_2015_Praha.JPG/800px-Andrej_Babi%C5%A1_2015_Praha.JPG">
	</div>
	<?php
		include "including2.php"
	?>
	</body>
</html>
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
            }
?>

