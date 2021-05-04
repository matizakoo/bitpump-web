<?php
    session_start();
    if ((!isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		header('Location: index.php');
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
                    Zmień swoje dane
                </p>
                <hr/>
                <form action="joindetails.php" method="POST">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Imie</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="imie">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nazwisko</label>
                    <input type="text" name="surname" class="form-control" id="exampleInputPassword1" placeholder="Nazwisko">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Kraj</label>
                    <input type="text" name="country" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kraj">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Miejscowość</label>
                    <input type="text" name="city" class="form-control" id="exampleInputPassword1" placeholder="Miejscowość">
                  </div>
                       <figure class="logbox" style="margin-top:5px; margin-bottom:5px;">
                        <input data-bs-type="button" style="color:black; margin-top:10px;margin-bottom:10px;" id="click_login_submit" type="submit" class="loginbutton" value="Ustaw dane" />
                        </figure>
                        <p>
                        <?php if(isset($_SESSION['change']))
                                echo $_SESSION['change'];
                        ?>
                        </p>
                </form>
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
