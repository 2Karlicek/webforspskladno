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
                margin-left: 10%;
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
    
    <center><h1>Registrace</h1></center>
<center>
    
        <form action="login.php" method="post">    
            <input placeholder="Přihlašovací jméno" name="username" type="text"><br><br>    
              
            <input placeholder="Email" name="email" type="email"><br><br>    
            <input placeholder="Heslo"  name="password1" type="password"><br><br>
            <input placeholder="Potvrdit heslo" name="password2" type="password"><br><br>
            <input type="checkbox"  name="check">
            <div class="text">
            <label for="novzduch">Příjmáním těchto podmínek se vzdáváte práva na vzduch.</label><br><br>
			<button class="button button2"><a href="https://xeon.spskladno.cz/~novotnyo/idk/p%c5%99ihl%c3%a1%c5%a1en%c3%ad.html">Mám účet</a></button>
			<button name="odeslat1" type="submit" class="button button3">Odeslat</button>
        </form> <br>
    </div>

</center>
</div>
		<?php
					if(isset($_POST["odeslat1"])){
					$username2 = $_POST["username"];
					$email2 = $_POST["email"];
					$password2 = hash("sha256", $_POST["password1"]);
					$heslo = hash("sha256", $_POST["password2"]);
					
					echo "<br>";
					echo $username2;
					echo "<br>";
					echo $email2;
					echo "<br>";
					echo $password2; 


					$servername = "dbs.spskladno.cz";
					$username = "student12";
					$password = "spsnet";
					$dbname = "vyuka12";

					if ($password2 == $heslo && $_POST["check"] =="on"){
						$conn = new mysqli($servername, $username, $password, $dbname);

						$query = "INSERT INTO logins(username, email ,password) VALUES('$username2','$email2', '$password2')";

						$result = mysqli_query($conn, $query);

						if(!$result){
							die("bad");
						}
					}
					else {
						echo"špatně zadaná hesla.";
					}
					
				
            
        }	
				?>
	</body>
</html>
