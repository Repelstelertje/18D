<ul class="navbar-nav ml-auto">
	<li class="nav-item dropdown"> 
		<a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sexdates in Nederland</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  	<?php

		    	foreach ($navItemsNL as $item) {
		      		echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
		    	}
		    
		  	?>
		</div>
</li>
<li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sexdates in België</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php

                        foreach ($navItemsBE as $item) {
                                echo "<a class=\"dropdown-item\" href=\"$item2[slug]\">$item2[title]</a>";
                        }

                        ?>
                </div>
        </li>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sexdates in UK</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        foreach ($navItemsUK as $item) {
                                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
                        }
                        ?>
                </div>
        </li>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sexdates in Duitsland</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        foreach ($navItemsDE as $item) {
                                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
                        }
                        ?>
                </div>
        </li>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sexdates in Oostenrijk</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        foreach ($navItemsAT as $item) {
                                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
                        }
                        ?>
                </div>
        </li>
        <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sexdates in Zwitserland</a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        foreach ($navItemsCH as $item) {
                                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
                        }
                        ?>
                </div>
        </li>
</ul>
