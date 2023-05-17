<!DOCTYPE html>
<html>
	<head>
		<style>
			
			
			label {
				font-size: 18px;
				margin-bottom: 10px;
				color: #555;
			}
			
			input[type="text"], input[type="password"], input[type="email"] {
				padding: 10px;
				font-size: 16px;
				border: solid;
				border-radius: 5px;
				margin-bottom: 20px;
			}
			
			input[type="submit"]{
				background-color: #c5c5c5; 
                color: white;
                padding: 15px 32px;
                text-align: center;
                display: inline block;
                margin: 4px 2px;
                cursor: pointer;
                transition-duration: 0.4s;
                border: 2px solid black;
                border-radius: 30%;
                margin-left: 10%;
				color: black;
				text-decoration: none;
			}
			
			

			.hlabel {
				font-size: larger;
			}

			.button {
                background-color: #c5c5c5; 
                color: white;
                padding: 15px 32px;
                text-align: center;
                display: inline block;
                margin: 4px 2px;
                cursor: pointer;
                transition-duration: 0.4s;
                border: 2px solid black;
                border-radius: 30%;
                }
            .button3  {
                background-color: #c5c5c5; 
                color: white;
                padding: 15px 32px;
                text-align: center;
                display: inline block;
                margin: 4px 2px;
                cursor: pointer;
                transition-duration: 0.4s;
                border: 2px solid black;
                border-radius: 30%;
                margin-left: 0%;
				color: black;
                
                
                }

				button a {
                    text-decoration: none;
					color: black
                }

            .button2:hover {
                box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24),0 17px 50px 0 rgba(0,0,0,0.19);
                }
                .text{
                    font-size: large;
                }

			.registrace {
				margin-top: 10%;
			}

			
		</style>
	</head>
	<body>

	<div class="registrace">
    
    <center><h1>Přihlášení</h1></center>
<center>
    
        <form action="prihlaseni.php" method="post">    
            <input placeholder="Přihlašovací jméno" name="username3" type="text"><br><br>    
              
               
            <input placeholder="Heslo"  name="password3" type="password"><br><br>
            <center><button name="odeslat1" type="submit" class="button button3">Odeslat</button></center>
           
        </form> <br>
    </div>

</center>
</div>
		<?php
					if(isset($_POST["odeslat1"])){
                    $servername = "dbs.spskladno.cz";
					$username = "student12";
					$password = "spsnet";
					$dbname = "vyuka12";

					
					$conn = new mysqli($servername, $username, $password, $dbname);

                    $user = $_POST['username3'];
                    $pass = hash("sha256",$_POST['password3']);

                    // Ověření přihlašovacích údajů v databázi
                    $sql = "SELECT * FROM logins WHERE username = '$user' AND password = '$pass'";
                    $result = $conn->query($sql);

                    // Zkontrolování, zda byly nalezeny shodné přihlašovací údaje v databázi
                    if ($result->num_rows > 0) {
                        echo "přihlášen";
                        session_start();
                        $_SESSION['uzivatel'] = $user;
                        $_SESSION['heslo'] = $pass;
                        echo "<br>";
                        echo $_SESSION['uzivatel'];
                    } else {
                        // Přihlašovací údaje nejsou platné, zobrazíme chybovou zprávu uživateli
                        echo "Chybné přihlašovací údaje!";
                    }

                    // Uzavření spojení s databází
                    $conn->close();


                    }
	
				?>
	</body>
</html>
