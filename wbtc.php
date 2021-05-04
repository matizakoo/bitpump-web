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
               Czym jest Bitcoin?
            </p>
            <img src="1x/btcpic5.jpg" alt="">
            <p class="des2" style="margin-top: 15px;">
                Bitcoin jest rodzajem waluty cyfrowej, która działa poza kontrolą organu centralnego. Istnieje kilka wariantów kryptowalut, które powstały w wyniku rozwidlenia Bitcoina, na przykład gotówka, złoto i diament. Artykuł koncentruje się głównie na Bitcoinie.
            </p>
            <p>
                Bitcoin został stworzony w 2009 roku przez osobę lub grupę osób pod nazwą Satoshi Nakamoto. Intencją jego twórców, było stworzenie metody płatności wolnej od nadzoru rządowego, opóźnień w transferze lub opłat transakcyjnych. Jednak jak dotąd większość firm i konsumentów nie przyjmuje jeszcze Bitcoinów jako formy płatności, a jego wartość jest zbyt zmienna, by zapewnić legalną alternatywę dla tradycyjnych walut.
            </p>         
            <p>
                Obecnie Bitcoin wykorzystywany jest jako przede wszystkim forma inwestycji. Jego charakterystyka bardziej zbliża go do towarów niż konwencjonalnych walut. Wynika to z faktu, że pozostaje poza wpływem konkretnej gospodarki i w zasadzie nie podlega zmianom polityki pieniężnej. Niemniej jednak istnieje kilka innych czynników, które mogą wpływać na ceny Bitcoinów i powinny być brane pod uwagę przez inwestorów.
            </p>
            <p class="des2">
                Jak działa Bitcoin?
            </p>
            <p>
                Funkcjonowanie Bitcoina oparte jest na dwóch podstawowych mechanizmach - blockchain i tzw. procesie wykopywania (mining).
            </p>
            <p class="des2">
                Czym jest blockchain?
            </p>
            <p>
                Można powiedzieć, że blockchain jest swego rodzaju cyfrową księgą główną, która przechowuje zapis wszystkich transakcji Bitcoinowych. Dokonywane na bieżąco transakcje kryptowalutowe są grupowane przez tzw. wydobywców (lub górników) w bloki, które następnie są szyfrowane kryptograficznie, zanim zostaną połączone z całym istniejącym już łańcuchem (czyli blockchain). Blockchain jest dostępny dla każdego w dowolnym momencie, ale można go zmienić tylko dzięki mocy obliczeniowej większości sieci.
            </p>
            <p class="des2">
                Na czym polega mining?
            </p>
            <p class="des3">
                Mining (inaczej wykopywanie), to proces tworzenia każdego bloku oraz łączenia go z istniejącym łańcuchem blockchain. Kiedy powstaje nowy blok, wraz z nim powstaje nowa jednostka kryptowaluty, określana mianem nagrody (block reward). Ze względu na swoją kluczową rolę w całym procesie, wydobywcy (czy inaczej - górnicy) mogą wywierać znaczącą kontrolę nad Bitcoinem.
            </p>
            <p>
                Jak działa lewarowane przeprowadzanie transakcji na Bitcoinie?
                Kiedy kupujesz Bitcoina na giełdzie, cena jednego Bitcoina jest zwykle podawana w stosunku do dolara amerykańskiego (USD). Innymi słowy, sprzedajesz USD, aby kupić Bitcoina. Jeśli cena Bitcoina wzrośnie, będziesz mógł sprzedać z zyskiem, ponieważ Bitcoin jest teraz wart więcej dolarów niż w momencie kiedy go kupowałeś. Jeśli cena spadnie, a Ty zdecydujesz się sprzedać, wówczas poniesiesz stratę.
            </p>
            <p>
                Z CMC Markets masz możliwość handlowania Bitcoinem poprzez rachunek CFD. To pozwala spekulować na ruchach cen Bitcoina bez posiadania rzeczywistej kryptowaluty. Nie przejmujesz własności Bitcoina. Zamiast tego otwierasz pozycję, która wzrośnie lub spadnie w zależności od ruchu ceny BTC w stosunku do dolara.
            </p>
            <p>
                <a href="https://www.cmcmarkets.com/pl-pl/edukacja-kryptowaluty/czym-jest-bitcoin" style="font-weight: 100;color: black;padding-bottom: 10px;">Źródlo</a>
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
