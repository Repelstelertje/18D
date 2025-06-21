<ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sexdates in Europa</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/index.php#nederland">Nederland</a>
                        <a class="dropdown-item" href="/index.php#belgie">Belgi&euml;</a>
                        <a class="dropdown-item" href="/index.php#uk">United Kingdom</a>
                        <a class="dropdown-item" href="/index.php#duitsland">Duitsland</a>
                        <a class="dropdown-item" href="/index.php#oostenrijk">Oostenrijk</a>
                        <a class="dropdown-item" href="/index.php#zwitserland">Zwitserland</a>
                </div>
        </li>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Datingtips</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        foreach ($navItemsTips as $item) {
                                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
                        }
                        ?>
                </div>
        </li>
</ul>

