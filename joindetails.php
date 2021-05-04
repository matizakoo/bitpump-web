<?php

    session_start();

    //require_once "connect.php";

    //$polaczenie = @new mysqli($host,$db_user,$db_password,$db_name);
    
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    
    echo $_SESSION['id'];
    // łączymy się z bazą danych
    $connection = mysqli_connect('localhost', 'root','','bitpump')
    or die('Brak połączenia z serwerem MySQL');

    $db = @mysqli_select_db($connection,'bitpump')
    or die('Nie mogę połączyć się z bazą danych');

    $idx = $_SESSION['id'];
   if(($name!=NULL)&&($surname!=NULL)&&($country!=NULL)&&($city!=NULL))
    {
        $sql = "UPDATE uzytkownicy SET surname='$surname',name='$name',country='$country',city='$city' WHERE id='$idx'";
       $ins = $connection->query($sql);
       header('Location:gitchange.php');
       mysqli_close($connection);
       exit();
    
        //if($ins) echo "Rekord został dodany poprawnie";
            //else echo "Błąd nie udało się dodać nowego rekordu";
    }
    else
    {
        $_SESSION['change'] = '<span style="color:red;margin-left:45px;">Wszystkie komórki nie zostały wypełnione</span>';
        header('Location:changingdetails.php');
        exit();
    }

    
    
    mysqli_close($connection);
?>