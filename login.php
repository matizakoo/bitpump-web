<?php

    session_start();
    
    if((!isset($_POST[login]))||(!isset($_POST['haslo'])))
    {
        header('Location:index.php');
        exit();
    }


    require_once "connect.php";

    $polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);

    if($polaczenie->connect_errno!=0)
    {
        echo "Error: ".$polaczenie->connect.errno;
    }
    else
    {
        $login = $_POST['login'];
        $haslo = $_POST['haslo'];
        
        $login = htmlentities($login,ENT_QUOTES,"UTF-8");
       

        //$sql = "SELECT * FROM uzytkownicy WHERE user='$login' AND pass='$haslo'";
        
        //if($rezultat = @$polaczenie->query($sql))
        
        if($rezultat = @$polaczenie->query(sprintf("SELECT * FROM uzytkownicy WHERE email='%s'",mysqli_real_escape_string($polaczenie,$login))))
        {
            $ile_userow = $rezultat->num_rows;
            if($ile_userow>0)
            {
                $wiersz = $rezultat->fetch_assoc();
                
                if(password_verify($haslo,$wiersz['pass'])==true)
                {
                    $_SESSION['zalogowany'] = true;
                    

                    $_SESSION['id'] = $wiersz['id'];
                    $_SESSION['name'] = $wiersz['name'];
                    $_SESSION['email'] = $wiersz['email'];
                    $_SESSION['surname'] = $wiersz['surname'];
                    $_SESSION['dateofbirth'] = $wiersz['dateofbirth'];
                    $_SESSION['country'] = $wiersz['country'];
                    $_SESSION['city'] = $wiersz['city'];
                    
                    $_SESSION['user'] = $wiersz['user'];

                    unset($_SESSION['blad']);

                    $rezultat->free_result();
                    header('Location:index.php');
                }
                else
                {
                    $_SESSION['blad'] = '<span style="color:red;margin-left:45px;">Nieprawidłowy login lub hasło</span>';
                    header('Location:loginx.php');
                }
            }
            else
            {
                $_SESSION['blad'] = '<span style="color:red;margin-left:45px;">Nieprawidłowy login lub hasło</span>';
                header('Location:loginx.php');
            }
        }
        
        $polaczenie->close();   
    }
?>