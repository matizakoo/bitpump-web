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
        <link rel="stylesheet" href="other.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&amp;subset=latin-ext" rel="stylesheet"/>
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
        <article class="art" id="art">
           <div id="art2">
              <div id="order">
                 <h1 id="h">
                     ZAMÓW SWOJĄ KARTE BITPUMP I KUP CO CHCESZ ZA POMOCĄ  <span style="color: #d0b90b">KRYPTO</span>
                 </h1>
                 Dzięki Karcie BitPump możesz zamieniać i wydawać swoje ulubione kryptowaluty u ponad 60 milionów sprzedawców na całym świecie
              </div>
              <div class="newcard">
                    <img src="1x/card.png" alt="">
              </div>
           </div>
           <!-- min 924 -->
            <div id="artmin">
             <!-- <div id="carto"> -->
                    <img src="1x/card.png" alt="fsafas" >
              <!-- </div> -->
              <div id="ordermin">
                 <h1 id="h2">
                     ZAMÓW SWOJĄ KARTE BITPUMP I KUP CO CHCESZ ZA POMOCĄ  <span style="color: #d0b90b">KRYPTO</span>
                 </h1>
                 Dzięki Karcie BitPump możesz zamieniać i wydawać swoje ulubione kryptowaluty u ponad 60 milionów sprzedawców na całym świecie
              </div>
           </div>
           <div class="benefits">
              <p style="text-align: center;margin-top: 40px; font-size: 30px;" id="cardben">
                  Korzyści z używania karty <span style="color: #f0b90b">BitPump</span>
               <div class="bencol">
                   <p style="color: #f0b90b">
                       Zero opłat
                   </p>
                   <p>
                       Karta BitPump jest całkowicie darmowa. BitPump nie będzie pobierać żadnych opłat administracyjnych ani manipulacyjnych.
                   </p>
               </div>
               <div class="bencol">
                   <p style="color: #f0b90b">
                       Trzymaj krypto i wymieniaj dopiero wtedy, gdy tego potrzebujesz
                   </p>
                   <p>
                       Trzymaj kryptowaluty w swoim portfelu Karty BitPump i wymieniaj je tylko podczas dokonywania płatności.
                   </p>
               </div>
               <div class="bencol">
                   <p style="color: #f0b90b">
                       Do 5% cashbacku za Twoje zakupy
                   </p>
                   <p>
                       Uzyskaj do 5% cashbacku za wszystkie kwalifikujące się zakupy dokonane kartą BitPump!
                   </p>
               </div>
               <div class="bencol">
                   <p style="color: #f0b90b">
                       Twoje fundusze są SAFU
                   </p>
                   <p>
                       Wszystkie środki z Twojej Karty BitPump są chronione przez najwyższej jakości standardy bezpieczeństwa dostępne na Binance. Śpij dobrze, zapewnimy Ci ochronę.
                   </p>
               </div>
               
           </div>
        </article>
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
