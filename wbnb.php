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
               Czym jest Binance Coin?
            </p>
            <img src="1x/bnbpic2.jpg" alt="">
            <p class="des2" style="margin-top: 15px;">
                BNB został rozdystrybuowany w ramach tzw. Initial Coin Offering (ICO) między wczesnymi inwestorami Binance. ICO odbyło się w dniach 26 czerwca do 3 lipca 2017 r., czyli na 11 dni przed oficjalnym uruchomieniem platformy handlowej na Binance.
            </p>
            <p>
                BNB zostało utworzone jako token w standardzie ERC-20 i działa na sieci blockchain Ethereum. Całkowita podaż kryptowaluty wynosi 200 millionów. 100 millionów zostało przeznaczonych dla inwestorów w trakcie ICO.
            </p>         
            <p>
                Połowa z całej istniejącej podaży BNB zostanie ostatecznie bezpowrotnie zniszczona w procesie ich spalenia.
            </p>
            <p class="des2">
                Dlaczego więc używać BNB?
            </p>
            <p>
                Za każdą transakcję dokonaną na Binance płacisz prowizję.
                Możesz zapłacić tę prowizję za pomocą aktywów (czyt. kryptowalut), którymi właśnie handlujesz,
                lub
                możesz zapłacić tę prowizję przy pomocy BNB, dzięki czemu uzyskasz dodatkową
            </p>
            <p class="des2">
                Zniżki przy użyciu BNB
            </p>
                Zniżka ta będzie sukcesywnie zmniejszać się rok rocznie, aż do piątego roku działalności Binance.
                <ul>
                <li>
                    Rok 1: 50% zniżka
                </li>
                <li>
                    Rok 2: 25% zniżka
                </li>
                <li>
                    Rok 3: 12.5% zniżka
                </li>
                <li>
                    Rok 4: 6.75% zniżka
                </li>
                <li>
                    Rok 5: brak zniżki
                </li>
                </ul>
            <p>
                <a href="https://academy.binance.com/pl/articles/what-is-bnb" style="font-weight: 100;color: black;padding-bottom: 10px;">Źródlo</a>
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
