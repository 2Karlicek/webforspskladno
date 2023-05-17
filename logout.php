<!DOCTYPE html>
<head>
    <style>
        
    </style>
</head>
<body>
    <?php
    	session_start();
    	unset($_SESSION["uzivatel"]);
	unset($_SESSION["heslo"]);
              // Zničíme relaci
        session_destroy();
        header("Location:tomio.php");
    
    
    
    ?>
</body>
