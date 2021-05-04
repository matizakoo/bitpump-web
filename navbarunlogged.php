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
                <div class="divv">
                    <?php if(isset($_SESSION['zalogowany'])): ?>

                    <div class="buttons">
                        <a class="nav-link" href="profile.php" style="margin-right: 10px; color:#f0b90b; ">Profil</a>
                        <a class="nav-link"
                            id="rejestr"
                            href="logout.php"
                            style="background-color: #f0b90b; color: black; border-radius: 10px">Wyloguj się</a>
                    </div>
                    <button
                        class="navbar-toggler bg-color:white"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#menu"
                        aria-label="Toggle navigation"
                        aria-controls="#menu"
                        aria-expanded="false"
                        id="nav-toggle-button">
                        <span class="navbar-toggler-icon">≡</span>
                    </button>
                <?php else: ?>

                    <div class="buttons">
                        <a class="nav-link" href="loginx.php" style="margin-right: 10px">Zaloguj się</a>
                        <a
                            class="nav-link"
                            id="rejestr"
                            href="register.php"
                            style="background-color: #f0b90b; color: black; border-radius: 10px">Rejestracja</a>
                    </div>

                    <?php endif; ?>
                </div>
                <div class="collapse navbar-collapse" id="menu">
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle"  data-bs-toggle="dropdown" role="button" href="#" aria-expanded="false" id="submenu" aria-haspopup="true">Kup kryptowaluty</a>

                            <div class="dropdown-menu animate slideIn" aria-labelledby="submenu">
                                <a class="dropdown-item disabled" href="#">Karta kredytowa</a>
                                <a class="dropdown-item disabled" href="#">Handel P2P</a>
                                <a class="dropdown-item disabled" href="#">Saldo gotówkowe</a>
                            </div>
                        </li>
                        <li>
                            <a class="nav-link disabled" href="market.php">Rynki</a>
                        </li>
                        <li>
                            <a class="nav-link" href="card.php">Pump card</a>
                        </li>
                        <li>
                            <a class="nav-link disabled" href="#">Akademia kryptowalut</a>
                        </li>
                        <li>
                            <a class="nav-link" href="contact.php">Kontakt</a>
                        </li>
                        <li>
                            <a class="nav-link" href="about.php">O nas</a>
                        </li>
                        <div class="papi">
                            <li>
                               <?php
                                echo "<a class='nav-link newbuttons' href='profile.php' style='margin-right: 10px;disabled;color:#f0b90b;display:inline-block;padding-right:20px;padding-left:20px;border-radius:10px;'>Profil</a>"
                                ?>
                            </li>
                            <li>
                               <?php
                                echo "<a class='nav-link newbuttons' href='logout.php' style='margin-right: 10px;color:black;margin-top:0px; display:inline-block; background-color:#f0b90b;border-radius: 10px;'>Wyloguj się</a>"
                                ?>
                            </li>
                        </div>
                    </ul>
                </div>
            </nav>