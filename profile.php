<?php
    session_start();
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		$_SESSION['zalogowany'] = true;
        //mysqli_connect('localhost','root','','bitpump');
	}
    else
    {
        header('Location:index.php');
        exit();
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
        <link rel="stylesheet" href="w.css">
        <link
            href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext"
            rel="stylesheet"
        />
    </head>
    <body>
        <header>
            <?php
            if(!isset($_SESSION['zalogowany']))
            {
                include 'navbar.php';
            }
            else
            {
                include 'navbarunlogged.php';
            }  
            ?>
        </header>
        <div class="midpanelxd">
            <div class="midimgxd">
                <div style="padding-top:20px;">
                    <?php
                        //echo $_SESSION['id'];
                        if($_SESSION['name']!='NULL')
                        {
                            echo "<p><b>Witaj ".$_SESSION['name']."</b></p>";
                        }
                        else
                            echo "<span style='color:red'>Nie ustawiłeś swojego imienia. Czym prędzej to zmień!</span>";
                    ?>
                </div>
                <div class="detailscontainer">
                    <div class="details">
                        <p>
                            Imie: 
                            <?php
                        //echo $_SESSION['id'];
                        if($_SESSION['name']!='NULL')
                            echo $_SESSION['name'];
                        else
                            echo "<span style='color:red'>Nie ustawiono imienia</span>";
                        ?>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            Nazwisko: 
                            <?php
                        //echo $_SESSION['id'];
                        if($_SESSION['surname']!='NULL')
                            echo $_SESSION['surname'];
                        else
                            echo "<span style='color:red'>Nie ustawiono nazwiska</span>";
                        ?>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            E-mail: 
                            <?php
                        //echo $_SESSION['id'];
                        if($_SESSION['email']!='NULL')
                            echo $_SESSION['email'];
                        //else
                            //echo "<span style='color:red'>Nie ustawiono emailu</span>";
                        ?>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            Kraj: 
                            <?php
                        //echo $_SESSION['id'];
                        if($_SESSION['country']!='NULL')
                            echo $_SESSION['country'];
                        else
                            echo "<span style='color:red'>Nie ustawiono kraju pochodzenia</span>";
                        ?>
                        </p>
                    </div>
                    <div class="details">
                        <p>
                            Miejscowość: 
                            <?php
                        //echo $_SESSION['id'];
                        if($_SESSION['city']!='NULL')
                            echo $_SESSION['city'];
                        else
                            echo "<span style='color:red'>Nie ustawiono miejscowości zamieszkania</span>";
                        ?>
                        </p>
                    </div>
                    
                    <div class="detailscontainer">
                       <a href="changingdetails.php">
                        <input data-bs-type="button" style="color:black; margin-top:10px;margin-bottom:10px;margin-left:auto;margin-right:auto;background-color:#F0B90B;border:0px;" id="click_login_submit" type="submit" class="loginbutton" value="Zmień dane">
                        </a>
                    </div>
                </div>
            </div>
        </div>
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
