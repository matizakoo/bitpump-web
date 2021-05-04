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
               Czym jest Ethereum?
            </p>
            <img src="1x/ethpic.png" alt="">
            <p class="des2" style="margin-top: 15px;">
                Ethereum to platforma cyfrowa, która umożliwia budowanie wielu zdecentralizowanych aplikacji.
            </p>
            <p>
                Mogą to być programy zabezpieczeń, systemy głosowania, czy też metody płatności. Podobnie jak Bitcoin, Ethereum działa poza kontrolą władz centralnych, takich jak banki i rządy.
            </p>         
            <p>
                Pomysł utworzenia Ethereum powstał dzięki Vitalikowi Buterinowi. Uruchomił on pierwszą wersję platformy w 2015 roku, z pomocą kilku współtwórców. Od tego czasu stała się ona drugą co do wielkości kryptowalutą i przyczyniła się do zwiększenia liczby nowych konkurentów dla Bitcoina.
            </p>
            <p class="des2">
                Jak działa Ethereum
            </p>
            <p>
                Ethereum działa jako otwarta platforma oprogramowania funkcjonująca w technologii blockchain. Ten blockchain jest hostowany na wielu komputerach na całym świecie, tworząc system  całkowicie zdecentralizowany. Każdy komputer posiada kopię tego łańcucha, a implementacja wszelkich zmian w sieci musi zostać zaakceptowane przez wszystkich.
            </p>
            <p class="des2">
                Co to są dappy?
            </p>
            <p>
                Dappy to oprogramowanie typu open source, które wykorzystuje technologię blockchain. W przeciwieństwie do tradycyjnych aplikacji, nie potrzebują pośrednika do działania. Ponieważ jest to wciąż stosunkowo nowa koncepcja, trudno jest dokładnie określić jej definicję. Jednak grupa ich wspólnych cech pokazuje, że są one otwarte (zarządzane autonomicznie) i zdecentralizowane.
            </p>
            <p class="des2">
                Czy Ethereum to kryptowaluta?
            </p>
            <p class="des3">
                Sam Ethereum zasadniczo nie jest kryptowalutą - słowo Ethereum odnosi się do platformy cyfrowej. Rzeczywiste tokeny (używane do płatności w sieci) nazywane są eterami. Innymi słowy, eter to "kryptopaliwo" (lub kryptowaluta) sieci Ethereum. Jeśli chodzi o transakcje, ceny które widzisz będą odnosiły się do eteru. Niemniej jednak, w wielu sytuacjach zaobserwujesz kryptowalutę określaną jako Ethereum.
            </p>
            <p class="des2">
                Jakie są różnice między Ethereum a Bitcoinem
            </p>
            <p>
                Jak już omówiliśmy, technologia blockchain związana z Ethereum jest podobna do technologii Bitcoina. Istnieje jednak ważne rozróżnienie dotyczące ich przeznaczenia i możliwości. Bitcoin wykorzystuje tylko jedną konkretną aplikację technologii blockchain. Ostatecznie jest to elektroniczny system kasowy, który umożliwia Bitcoinowe płatności online. Blockchain Ethereum śledzi posiadaczy waluty cyfrowej, ale także koncentruje się na prowadzeniu kodu szeregu zdecentralizowanych aplikacji.
            </p>
            <p>
                <a href="https://www.cmcmarkets.com/pl-pl/edukacja-kryptowaluty/czym-jest-ethereum" style="font-weight: 100;color: black;padding-bottom: 10px;">Źródlo</a>
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
