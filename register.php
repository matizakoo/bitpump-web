<?php
	session_start();

	
	if (isset($_POST['email']))
	{
		//Udana walidacja? Załóżmy, że tak!
		$wszystko_OK=true;
		
		// Sprawdź poprawność adresu email
		$email = $_POST['email'];
		$emailB = filter_var($email, FILTER_SANITIZE_EMAIL);
		
		if ((filter_var($emailB, FILTER_VALIDATE_EMAIL)==false) || ($emailB!=$email))
		{
			$wszystko_OK=false;
			$_SESSION['e_email']="Podaj poprawny adres e-mail!";
		}
		
		//Sprawdź poprawność hasła
		$haslo = $_POST['haslo'];
		
		if ((strlen($haslo)<8) || (strlen($haslo)>20))
		{
			$wszystko_OK=false;
			$_SESSION['e_haslo']="Hasło musi posiadać od 8 do 20 znaków!";
		}

		$haslo_hash = password_hash($haslo, PASSWORD_DEFAULT);
		
		//Czy zaakceptowano regulamin?
		if (!isset($_POST['regulamin']))
		{
			$wszystko_OK=false;
			$_SESSION['e_regulamin']="Potwierdź akceptację regulaminu!";
		}				
		
		//Zapamiętaj wprowadzone dane
		$_SESSION['fr_email'] = $email;
		$_SESSION['fr_haslo'] = $haslo;
		if (isset($_POST['regulamin'])) $_SESSION['fr_regulamin'] = true;
		
		require_once "connect.php";
		mysqli_report(MYSQLI_REPORT_STRICT);
		
		try 
		{
			$polaczenie = new mysqli($host, $db_user, $db_password, $db_name);
			if ($polaczenie->connect_errno!=0)
			{
				throw new Exception(mysqli_connect_errno());
			}
			else
			{
				//Czy email już istnieje?
				$rezultat = $polaczenie->query("SELECT id FROM uzytkownicy WHERE email='$email'");
				
				if (!$rezultat) throw new Exception($polaczenie->error);
				
				$ile_takich_maili = $rezultat->num_rows;
				if($ile_takich_maili>0)
				{
					$wszystko_OK=false;
					$_SESSION['e_email']="Istnieje już konto przypisane do tego adresu e-mail!";
				}
				
				if ($wszystko_OK==true)
				{
					if ($polaczenie->query("INSERT INTO uzytkownicy VALUES (NULL, '$email','$haslo_hash','NULL','NULL','NULL','NULL')"))
					{
						$_SESSION['udanarejestracja']=true;
						header('Location: welcome.php');
					}
					else
					{
						throw new Exception($polaczenie->error);
					}
				}
				$polaczenie->close();
			}
		}
		catch(Exception $e)
		{
			echo '<span style="color:red;">Błąd serwera! Przepraszamy za niedogodności i prosimy o rejestrację w innym terminie!</span>';
			echo '<br />Informacja developerska: '.$e;
		}
	}
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-t-fit-no" />
        <title>Document</title>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6"
            crossorigin="anonymous"
        />
        <link rel="stylesheet" href="main.css" />
        <link rel="stylesheet" href="other.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet"/>
    </head>
    <body>
       <header>
            <nav class="navbar navbar-expand-lg container-fluid" style="background-color: #12161c">
                <a class="navbar-brand" href="index.php" style="color: #f0b90b">
                    <img
                        src="1x/logo3.png"
                        alt=""
                        width="30"
                        class="d-inline-block mr-1 align-bottom navimg"
                    />
                    <b style="letter-spacing: 1px">BITPUMP</b>
                </a>
            </nav>
        </header>
        <div class="section">
           <div class="logging">
                <p>
                    Zarejestruj się
                </p>
                <hr/>
        <form method="post">
        <div class="form-group">
        
		<label for="exampleInputEmail1">E-mail</label>
		<input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Wprowadź e-mail" value="<?php
			if (isset($_SESSION['fr_email']))
			{
				echo $_SESSION['fr_email'];
				unset($_SESSION['fr_email']);
			}
		?>" name="email" />
		
		<?php
			if (isset($_SESSION['e_email']))
			{
				echo '<div class="error" style="color:red;">'.$_SESSION['e_email'].'</div>';
				unset($_SESSION['e_email']);
			}
		?>
       
       
        </div>
        
        <div class="form-group">
		<label for="exampleInputPassword1">Hasło</label>
		<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Hasło" value="<?php
			if (isset($_SESSION['fr_haslo']))
			{
				echo $_SESSION['fr_haslo'];
				unset($_SESSION['fr_haslo']);
			}
		?>" name="haslo" />
		<?php
			if (isset($_SESSION['e_haslo']))
			{
				echo '<div class="error" style="color:red;">'.$_SESSION['e_haslo'].'</div>';
				unset($_SESSION['e_haslo']);
			}?>
            </div>
            
            
            <div class="form-group form-check" style="font-size: 15px;">
		<label class="form-check-label" style="padding:5px;" for="exampleCheck1">
			<input  type="checkbox" class="form-check-input" name="regulamin" id="exampleCheck1" <?php
			if (isset($_SESSION['fr_regulamin']))
			{
				echo "checked";
				unset($_SESSION['fr_regulamin']);
			}
				?>/> Przeczytałem i akceptuję <a href="#" id="regulations" class="disabled" name="regulamin">regulamin BitPump</a>
		</label>
		
		<?php
			if (isset($_SESSION['e_regulamin']))
			{
				echo '<div class="error" style="color:red;">'.$_SESSION['e_regulamin'].'</div>';
				unset($_SESSION['e_regulamin']);
			}
		?>	
		
		<br />
		</div>
		<figure class="logbox" style="margin-top:5px; margin-bottom:5px;">
		<input data-bs-type="button" style="color:black;margin-bottom:5px;" id="click_login_submit" type="submit" class="loginbutton" value="Zarejestruj się" />
                </figure>
		
	    </form>
               <p>
                    <a class="nav-link disabled" href="#">Zapomniane hasło?</a>
                </p>
                <p>
                    <a class="nav-link" href="login.php" style="margin-top: -30px;">Masz już konto? Zaloguj się</a>
                </p>
            </div>
        </div>
        <!-- --------------------------------------------- -->
        
        <footer>
           <div class="furt">
                <p>
                    Mateusz Żak @bitpump s150001
                </p>
           </div>
        </footer>
        <script
            src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"
        ></script>
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
