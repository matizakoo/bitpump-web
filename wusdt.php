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
        <div class="art">
            <p class="des1">
               Czym jest Tether?
            </p>
            <img src="1x/usdtpic.png" alt="">
            <p class="des2" style="margin-top: 15px;">
                Tether (USDT) to najpopularniejsza kryptowaluta należąca do grona stable-coins, czyli coinów powiązanych w stosunku 1:1 do konkretnego aktywa (podobnie jak m.in. Dai, True USD). Tether jest w swoim założeniu powiązany z kursem dolara amerykańskiego (USD) i zawsze zmierza do uzyskania dokładnej wartości 1 USD. Tether jest zbudowany na blockchainie bitcoina (BTC) poprzez platformę Omni Layer (podobnie jak np. MaidSafeCoin). Niewielka część tokenów USDT istnieje również w formie kontraktów ERC20, opartych na blockchainie Ethereum (dostępne na giełdzie Ethfinex). USDT jest scentralizowanym tokenem emitowanym przez prywatną firmę Tether Ltd. w wielomilionowych transzach, które w głównej mierze trafiają na giełdy kryptowalut. Spółka emitująca USDT deklaruje, że jego podaż ma pełne pokrycie w dolarach amerykańskich.
            </p>
            <p class="des2">
                Jak działa Tether (USDT)?
            </p>
            <p>
                Cechą stablecoinów jest ich relatywna stabilność, w przeciwieństwie do bardziej tradycyjnych aktywów krypto. Tether jest tetherowany lub peggowany do waluty fiat. Z założenia USDT ma być peggowany ściśle z USD tak, aby na każde USDT będące w cyrkulacji przypadał $1 USD.
            </p>
            <p class="des2">
                W białej księdze Tethera jest napisane: 
            </p>
            <p>
                <i>Każda jednostka Tetheru wydawana do cyrkulacji jest zabezpieczana w stosunku 1:1 (np. jeden Tether USDT do jednego dolara amerykańskiego) w odpowiadającej walucie fiat przechowywanej przez Tether Limited z siedzibą w Hong Kongu.</i>
            </p>    
            <p class="des3">
                <a href="https://academy.binance.com/pl/divs/what-is-tether-usdt" style="font-weight: 100;color: black;padding-bottom: 10px;">Źródlo</a>
            </p>
            <p style="visibility: hidden">
                dsadsadafds
            </p>
            
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
