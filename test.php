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
            if(!isset($_SESSION['logged']))
            {
                include 'navbarunlogged.php'; 
            }
            else
            {
                  include 'navbar.php';
            }
                
            ?>
        </header>
        <div class="midpanel100">
            <div class="midpanel1002">
                Kupuj i sprzedawaj bezpiecznie<br />
                kryptowaluty<br />
                <b style="font-size: 15px; letter-spacing: 1px; margin-top: 30px; color: darkgray">Dołącz do nas już dziś</b>
                <a class="nav-link rejestr" href="register.php">Rejestracja</a>
            </div>
            <div class="midpanel1003">
                <b style="letter-spacing: 5px">BITPUMP</b>
            </div>
        </div>
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
