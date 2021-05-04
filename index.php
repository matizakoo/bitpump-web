<?php
    session_start();
    if ((isset($_SESSION['zalogowany'])) && ($_SESSION['zalogowany']==true))
	{
		$_SESSION['zalogowany'] = true;
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
                include 'midpanellogged.php';
            }
            else
            {
                
                include 'navbarunlogged.php';
                include 'midpanelunlogged.php';
            }  
            ?>
        </header>
        <div class="midpanel">
            <div class="midimg">
                <img src="1x/currency.png" alt=""> <br>
                Łatwe kupno walut
            </div>
            <div class="midimg">
                <img src="1x/time2.png" alt=""> <br> 
                Błyskawiczne przelewy          
            </div>
            <div class="midimg">
                <img src="1x/piggybank2.png" alt=""> <br>
                Zarabiaj na inwestycji
            </div>
        </div>
        <div class="currencypanel row">
           <div id="dk">
               Dostępne kryptowaluty na stronie
           </div>
            <div class="cpanel">
                <a href="wbtc.php"><img class="img-fluid" src="1x/cbtc.png" alt=""> <br>
                Bitcoin<br></a>
            </div>
            <div class="cpanel">
                <a href="wbnb.php"><img class="img-fluid" src="1x/cbnb.png" alt=""> <br>
                Binance Coin<br></a>
            </div>
            <div class="cpanel">
                <a href="weth.php"><img class="img-fluid" src="1x/ceth.png" alt=""> <br>
                Ethereum<br></a>
            </div>
            <div class="cpanel">
                <a href="wusdt.php"><img class="img-fluid" src="1x/cusdt.png" alt=""> <br>
                Tether<br></a>
            </div>
            <div class="slider">
                <div class="sliders">
                    <input type="radio" name="radio-btn" id="radio1">
                    <input type="radio" name="radio-btn" id="radio2">
                    <input type="radio" name="radio-btn" id="radio3">
                    <input type="radio" name="radio-btn" id="radio4">
                    <div class="slide first">
                        <img src="awards/effie.png" alt="effie award">
                    </div>
                    <div class="slide">
                        <img src="awards/gugel.png" alt="google award">
                    </div>
                    <div class="slide">
                        <img src="awards/mixx.png" alt="mixx award">
                    </div>
                    <div class="slide">
                        <img src="awards/tech.jpg.png" alt="tech award">
                    </div>
                    <div class="navigation-auto">
                        <div class="auto-btn1"></div>
                        <div class="auto-btn2"></div>
                        <div class="auto-btn3"></div>
                        <div class="auto-btn4"></div>
                    </div>
                    <!-- koniec nawigacji -->
                </div>
                <!-- manualna nawigacjia start -->
                <div class="navigation-manual">
                    <label for="radio1" class="manual-btn"></label>
                    <label for="radio2" class="manual-btn"></label>
                    <label for="radio3" class="manual-btn"></label>
                    <label for="radio4" class="manual-btn"></label>
                </div>
                <!-- manualna nawigacjia stop -->
            </div>
            <!-- koniec slider -->
            <script type="text/javascript">
                var counter = 1;
                setInterval(function(){
                    document.getElementById('radio'+ counter).checked = true;
                    counter++;
                    if(counter>4)
                        counter = 1;
                },7500);
            </script>
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
