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
        <section>
           <div id="meetcon">
            <div id="meetuscloser">
                <header>
                    <h1>Poznajcie nas bliżej</h1>
                    <p>
                            Mamy przyjemność przedstawić Państwu nasz zarząd, który zawsze daje z siebie 100%, aby nasi klienci byli w pełni zadowoleni z naszych usług
                    </p>
                </header>
            </div>
            </div>
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-sm-6">
                    <div class="zdj">
                        <img src="management/prezes.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Mateusz Żak</h3>
                            <h5>Prezes BitPump</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/boss1.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Leon Borys</h3>
                            <h5>Dyrektor generalny</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/investmentspecialist.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Flapi Faścior</h3>
                            <h5>specjalista ds. finansów</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/senior.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Karol Bored</h3>
                            <h5>Senior Java developer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/accountant.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Amika Fika</h3>
                            <h5>Księgowa</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/secretary.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Puszka Okruszka</h3>
                            <h5>Sekretarka</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/menager.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Dober Kalkov</h3>
                            <h5>Menadżer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/dbspecjalist.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Peper Oni</h3>
                            <h5>Specjalista ds. baz danych</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/juniorjava.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Jaskier Wilczyk</h3>
                            <h5>Junior Java developer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/regular.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Sinus Cosinus</h3>
                            <h5>Java developer</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/telephonist.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Adi</h3>
                            <h5>Pracownik call center</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/interns.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Stażyści</h3>
                            <h5>Nie wiedzą co tu robią</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="zdj">
                        <img src="management/siblingsmoneyspecialists.png" alt="prezes bitpummp">
                        <div class="card-text">
                            <h3>Al i A Kowalscy</h3>
                            <h5>Headhunterzy</h5>
                        </div>
                    </div>
                </div>
            </div>                
        </div>
        </section>
        <footer>
           <div class="furte">
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
