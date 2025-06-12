<ul class="navbar-nav ml-auto">
	<li class="nav-item dropdown"> 
		<a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sexdates in Nederland</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  	<?php

		    	foreach ($navItems as $item) {
		      		echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
		    	}
		    
		  	?>
		</div>
	</li>
	<li class="nav-item dropdown"> 
		<a class="nav-link dropdown-toggle drpdwn" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Sexdates in België</a>
		<div class="dropdown-menu" aria-labelledby="navbarDropdown">
		  	<?php

		    	foreach ($navItems2 as $item2) {
		      		echo "<a class=\"dropdown-item\" href=\"$item2[slug]\">$item2[title]</a>";
		    	}
		    
		  	?>
		</div>
	</li>
</ul>