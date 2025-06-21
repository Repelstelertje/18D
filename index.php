<?php
$base = __DIR__;
	define("TITLE", "Home");
  include $base . '/includes/header.php';
?>

<div class="container">
    <!-- Jumbotron Header -->
    <div class="jumbotron my-4 text-center">
        <h1>18Date.net - Vind hier jouw gratis sexdate!</h1>
        <hr>
        <h2>Zoek hier vrouwen bij jou in buurt!</h2>
        <div class="button-area">
        <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nederland</a>
        <div class="dropdown-menu" aria-labelledby="provDropdown">
            <?php
            foreach ($navItemsNL as $item) {
                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
            }
            ?>
        </div>
        </div>
        <div class="button-area">
        <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">België</a>
        <div class="dropdown-menu" aria-labelledby="provDropdown">
            <?php
            foreach ($navItemsBE as $item) {
                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
            }
            ?>
        </div>
        </div>
        <div class="button-area">
        <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UK</a>
        <div class="dropdown-menu" aria-labelledby="provDropdown">
            <?php
            foreach ($navItemsUK as $item) {
                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
            }
            ?>
        </div>
        </div>
        <div class="button-area">
        <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Duitsland</a>
        <div class="dropdown-menu" aria-labelledby="provDropdown">
            <?php
            foreach ($navItemsDE as $item) {
                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
            }
            ?>
        </div>
        </div>
        <div class="button-area">
        <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Oostenrijk</a>
        <div class="dropdown-menu" aria-labelledby="provDropdown">
            <?php
            foreach ($navItemsAT as $item) {
                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
            }
            ?>
        </div>
        </div>
        <div class="button-area">
        <a class="dropdown-toggle btn btn-primary" href="#" id="provDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zwitserland</a>
        <div class="dropdown-menu" aria-labelledby="provDropdown">
            <?php
            foreach ($navItemsCH as $item) {
                echo "<a class=\"dropdown-item\" href=\"$item[slug]\">$item[title]</a>";
            }
            ?>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-sm text-center">
        <h2>Nieuwste leden Nederland op zoek naar een sexdate!</h2>
    </div>
    <div class="row" v-cloak>
        <div class="col-lg-3 col-md-6 mb-4 portfolio-item" id="Slankie" v-for="profile in filtered_profiles">
            <div class="card h-100">
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id"><img class="card-img-top" :src="profile.src.replace('150x150', '300x300')" :alt="profile.name + ' daten in Nederland'" @error="imgError"></a>
                <div class="card-body">
                    <div class="card-top">
                        <h4 class="card-title">{{ profile.name }}</h4>  
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Leeftijd: {{ profile.age }}</li>
                        <li class="list-group-item">Relatie: {{ profile.relationship }}</li>
                        <li class="list-group-item">Stad: {{ profile.city }}</li>
                        <li class="list-group-item">Provincie: {{ profile.province }}</li>
                    </ul>
                </div>
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id" class="card-footer btn btn-primary">Bekijk profiel</a>
            </div>
        </div>
        <script>
            var api_url= "<?= api_base('nl'); ?>/profile/banner9/120";
        </script>
        <!-- Pagination -->
        <nav class="nav-pag" aria-label="Page navigation">
            <ul class="pagination flex-wrap justify-content-center">
                <li class="page-item">
                    <a class="page-link" aria-label="Vorige" v-on:click="set_page_number(page-1)" ><span aria-hidden="true">&laquo;</span><span class="sr-only">Vorige</span></a>
                </li> 
                <li v-for="page_number in max_page_number" class="page-item" v-bind:class="{ active: page_number == page }" >
                  <a class="page-link" v-on:click="set_page_number(page_number)">{{ page_number }}</a>
                </li> 
                <li class="page-item">
                  <a class="page-link" aria-label="Volgende" v-on:click="set_page_number(page+1)" ><span aria-hidden="true">&raquo;</span><span class="sr-only">Volgende</span></a>
                </li>
            </ul>
        </nav>
    </div><!-- /.row -->
<div class="jumbotron jumbotron-sm text-center">
        <h2>Nieuwste leden België op zoek naar een sexdate!</h2>
    </div>
    <div class="row" v-cloak>
        <div class="col-lg-3 col-md-6 mb-4 portfolio-item" id="Slankie" v-for="profile in filtered_profiles">
            <div class="card h-100">
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id"><img class="card-img-top" :src="profile.src.replace('150x150', '300x300')" :alt="profile.name + ' daten in België'" @error="imgError"></a>
                <div class="card-body">
                    <div class="card-top">
                        <h4 class="card-title">{{ profile.name }}</h4>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Leeftijd: {{ profile.age }}</li>
                        <li class="list-group-item">Relatie: {{ profile.relationship }}</li>
                        <li class="list-group-item">Stad: {{ profile.city }}</li>
                        <li class="list-group-item">Provincie: {{ profile.province }}</li>
                    </ul>
                </div>
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id" class="card-footer btn btn-primary">Bekijk profiel</a>
            </div>
        </div>
        <script>
            var api_url= "<?= api_base('be'); ?>/profile/banner9/120";
        </script>
        <!-- Pagination -->
        <nav class="nav-pag" aria-label="Page navigation">
            <ul class="pagination flex-wrap justify-content-center">
                <li class="page-item">
                    <a class="page-link" aria-label="Vorige" v-on:click="set_page_number(page-1)" ><span aria-hidden="true">&laquo;</span><span class="sr-only">Vorige</span></a>
                </li> 
                <li v-for="page_number in max_page_number" class="page-item" v-bind:class="{ active: page_number == page }" >
                  <a class="page-link" v-on:click="set_page_number(page_number)">{{ page_number }}</a>
                </li> 
                <li class="page-item">
                  <a class="page-link" aria-label="Volgende" v-on:click="set_page_number(page+1)" ><span aria-hidden="true">&raquo;</span><span class="sr-only">Volgende</span></a>
                </li>
            </ul>
        </nav>
    </div><!-- /.row -->
<div class="jumbotron jumbotron-sm text-center">
        <h2>Nieuwste leden United Kingdom op zoek naar een sexdate!</h2>
    </div>
    <div class="row" v-cloak>
        <div class="col-lg-3 col-md-6 mb-4 portfolio-item" id="Slankie" v-for="profile in filtered_profiles">
            <div class="card h-100">
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id"><img class="card-img-top" :src="profile.src.replace('150x150', '300x300')" :alt="profile.name + ' daten in United Kingdom'" @error="imgError"></a>
                <div class="card-body">
                    <div class="card-top">
                        <h4 class="card-title">{{ profile.name }}</h4>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Leeftijd: {{ profile.age }}</li>
                        <li class="list-group-item">Relatie: {{ profile.relationship }}</li>
                        <li class="list-group-item">Stad: {{ profile.city }}</li>
                        <li class="list-group-item">Regio: {{ profile.province }}</li>
                    </ul>
                </div>
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id" class="card-footer btn btn-primary">Bekijk profiel</a>
            </div>
        </div>
        <script>
            var api_url= "<?= api_base('uk'); ?>/profile/banner9/120";
        </script>
        <!-- Pagination -->
        <nav class="nav-pag" aria-label="Page navigation">
            <ul class="pagination flex-wrap justify-content-center">
                <li class="page-item">
                    <a class="page-link" aria-label="Vorige" v-on:click="set_page_number(page-1)" ><span aria-hidden="true">&laquo;</span><span class="sr-only">Vorige</span></a>
                </li> 
                <li v-for="page_number in max_page_number" class="page-item" v-bind:class="{ active: page_number == page }" >
                  <a class="page-link" v-on:click="set_page_number(page_number)">{{ page_number }}</a>
                </li> 
                <li class="page-item">
                  <a class="page-link" aria-label="Volgende" v-on:click="set_page_number(page+1)" ><span aria-hidden="true">&raquo;</span><span class="sr-only">Volgende</span></a>
                </li>
            </ul>
        </nav>
    </div><!-- /.row -->
<div class="jumbotron jumbotron-sm text-center">
        <h2>Nieuwste leden Duitsland op zoek naar een sexdate!</h2>
    </div>
    <div class="row" v-cloak>
        <div class="col-lg-3 col-md-6 mb-4 portfolio-item" id="Slankie" v-for="profile in filtered_profiles">
            <div class="card h-100">
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id"><img class="card-img-top" :src="profile.src.replace('150x150', '300x300')" :alt="profile.name + ' daten in Duitsland'" @error="imgError"></a>
                <div class="card-body">
                    <div class="card-top">
                        <h4 class="card-title">{{ profile.name }}</h4>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Leeftijd: {{ profile.age }}</li>
                        <li class="list-group-item">Relatie: {{ profile.relationship }}</li>
                        <li class="list-group-item">Stad: {{ profile.city }}</li>
                        <li class="list-group-item">Provincie: {{ profile.province }}</li>
                    </ul>
                </div>
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id" class="card-footer btn btn-primary">Bekijk profiel</a>
            </div>
        </div>
        <script>
            var api_url= "<?= api_base('de'); ?>/profile/banner9/120";
        </script>
        <!-- Pagination -->
        <nav class="nav-pag" aria-label="Page navigation">
            <ul class="pagination flex-wrap justify-content-center">
                <li class="page-item">
                    <a class="page-link" aria-label="Vorige" v-on:click="set_page_number(page-1)" ><span aria-hidden="true">&laquo;</span><span class="sr-only">Vorige</span></a>
                </li> 
                <li v-for="page_number in max_page_number" class="page-item" v-bind:class="{ active: page_number == page }" >
                  <a class="page-link" v-on:click="set_page_number(page_number)">{{ page_number }}</a>
                </li> 
                <li class="page-item">
                  <a class="page-link" aria-label="Volgende" v-on:click="set_page_number(page+1)" ><span aria-hidden="true">&raquo;</span><span class="sr-only">Volgende</span></a>
                </li>
            </ul>
        </nav>
    </div><!-- /.row -->
<div class="jumbotron jumbotron-sm text-center">
        <h2>Nieuwste leden Oostenrijk op zoek naar een sexdate!</h2>
    </div>
    <div class="row" v-cloak>
        <div class="col-lg-3 col-md-6 mb-4 portfolio-item" id="Slankie" v-for="profile in filtered_profiles">
            <div class="card h-100">
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id"><img class="card-img-top" :src="profile.src.replace('150x150', '300x300')" :alt="profile.name + ' daten in Oostenrijk'" @error="imgError"></a>
                <div class="card-body">
                    <div class="card-top">
                        <h4 class="card-title">{{ profile.name }}</h4>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Leeftijd: {{ profile.age }}</li>
                        <li class="list-group-item">Relatie: {{ profile.relationship }}</li>
                        <li class="list-group-item">Stad: {{ profile.city }}</li>
                        <li class="list-group-item">Provincie: {{ profile.province }}</li>
                    </ul>
                </div>
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id" class="card-footer btn btn-primary">Bekijk profiel</a>
            </div>
        </div>
        <script>
            var api_url= "<?= api_base('at'); ?>/profile/banner9/120";
        </script>
        <!-- Pagination -->
        <nav class="nav-pag" aria-label="Page navigation">
            <ul class="pagination flex-wrap justify-content-center">
                <li class="page-item">
                    <a class="page-link" aria-label="Vorige" v-on:click="set_page_number(page-1)" ><span aria-hidden="true">&laquo;</span><span class="sr-only">Vorige</span></a>
                </li> 
                <li v-for="page_number in max_page_number" class="page-item" v-bind:class="{ active: page_number == page }" >
                  <a class="page-link" v-on:click="set_page_number(page_number)">{{ page_number }}</a>
                </li> 
                <li class="page-item">
                  <a class="page-link" aria-label="Volgende" v-on:click="set_page_number(page+1)" ><span aria-hidden="true">&raquo;</span><span class="sr-only">Volgende</span></a>
                </li>
            </ul>
        </nav>
    </div><!-- /.row -->
<div class="jumbotron jumbotron-sm text-center">
        <h2>Nieuwste leden Zwitserland op zoek naar een sexdate!</h2>
    </div>
    <div class="row" v-cloak>
        <div class="col-lg-3 col-md-6 mb-4 portfolio-item" id="Slankie" v-for="profile in filtered_profiles">
            <div class="card h-100">
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id"><img class="card-img-top" :src="profile.src.replace('150x150', '300x300')" :alt="profile.name + ' daten in Zwitserland'" @error="imgError"></a>
                <div class="card-body">
                    <div class="card-top">
                        <h4 class="card-title">{{ profile.name }}</h4>
                    </div>
                    <ul class="list-group">
                        <li class="list-group-item">Leeftijd: {{ profile.age }}</li>
                        <li class="list-group-item">Relatie: {{ profile.relationship }}</li>
                        <li class="list-group-item">Stad: {{ profile.city }}</li>
                        <li class="list-group-item">Regio: {{ profile.province }}</li>
                    </ul>
                </div>
                <a :href="'daten-met-' + slugify(profile.name) + '?id=' + profile.id" class="card-footer btn btn-primary">Bekijk profiel</a>
            </div>
        </div>
        <script>
            var api_url= "<?= api_base('ch'); ?>/profile/banner9/120";
        </script>
        <!-- Pagination -->
        <nav class="nav-pag" aria-label="Page navigation">
            <ul class="pagination flex-wrap justify-content-center">
                <li class="page-item">
                    <a class="page-link" aria-label="Vorige" v-on:click="set_page_number(page-1)" ><span aria-hidden="true">&laquo;</span><span class="sr-only">Vorige</span></a>
                </li> 
                <li v-for="page_number in max_page_number" class="page-item" v-bind:class="{ active: page_number == page }" >
                  <a class="page-link" v-on:click="set_page_number(page_number)">{{ page_number }}</a>
                </li> 
                <li class="page-item">
                  <a class="page-link" aria-label="Volgende" v-on:click="set_page_number(page+1)" ><span aria-hidden="true">&raquo;</span><span class="sr-only">Volgende</span></a>
                </li>
            </ul>
        </nav>
    </div><!-- /.row -->
  <div id="footer-banner"></div>
  <div class="jumbotron text-center">
      <h6>Nederland</h6>
      <a href="https://flirthonk.nl" target="_blank" class="m-0" title="FlirtHonk.nl - Vind Flirts & Contacten in Nederland!">Flirthonk</a> - 
      <a href="https://localflirt.nl" target="_blank" class="m-0" title="LocalFlirt.nl - Voor Jouw Perfecte Flirts in Nederland!">LocalFlirt</a> -
      <a href="https://65pluscontact.nl" target="_blank" class="m-0" title="65PlusContact.nl - 65+ Vriendschappen Vinden in Nederland!">65Plus Contact</a> - 
      <a href="https://lagelandenchat.nl" target="_blank" class="m-0" title="LageLandenChat.nl - Chat met landgenoten in Nederland!">Lage Landen Chat</a> - 
      <a href="https://oranjechat.nl" target="_blank" class="m-0" title="OranjeChat.nl - Vind Spannende Gesprekken in Nederlander">Oranje Chat</a> - 
      <a href="https://anoniemecontacten.nl" target="_blank" class="m-0" title="AnoniemeContacten.nl - Discreet Verbinden in Nederland">Anonieme Contacten</a> - 
      <a href="https://casualflirten.nl" target="_blank" class="m-0" title="CasualFlirten.nl - Ontspannen Flirten in heel Nederland">Casual Flirten</a> - 
      <a href="https://geheimegesprekken.nl" target="_blank" class="m-0" title="GeheimeGesprekken.nl - Vertrouwelijke Chats in Nederland">Geheime Gesprekken</a>
      <hr>
      <h6>België</h6>
      <a href="https://flirthonk.be" target="_blank" class="m-0" title="FlirtHonk.be - Ontdek Flirts & Contacten in België!">Flirthonk</a> - 
      <a href="https://localflirt.be" target="_blank" class="m-0" title="LocalFlirt.be - Jouw Perfecte Flirt Dichtbij Huis in België!">LocalFlirt</a> -
      <a href="https://65pluscontact.be" target="_blank" class="m-0" title="65PlusContact.be - 65+ Vriendschappen Vinden in België!">65Plus Contact</a> - 
      <a href="https://belgenchat.be" target="_blank" class="m-0" title="BelgenChat.be - Chatten met Landgenoten in België!">Belgen Chat</a> - 
      <a href="https://bechat.be" target="_blank" class="m-0" title="BeChat.be - Verbind met Belgen in Spannende Gesprekken">BEChat</a> - 
      <a href="https://anoniemecontacten.be" target="_blank" class="m-0" title="AnoniemeContacten.be - Discreet Verbinden met Belgen">Anonieme Contacten</a> - 
      <a href="https://casualflirten.be" target="_blank" class="m-0" title="CasualFlirten.be - Ontspannen flirten in heel België">Casual Flirten</a> - 
      <a href="https://geheimegesprekken.be" target="_blank" class="m-0" title="GeheimeGesprekken.be - Vertrouwelijke Chats in België">Geheime Gesprekken</a>
      <hr>
      <h6>United Kingdom</h6>
      <a href="https://mylocalflirt.com" target="_blank" class="m-0" title="MyLocalFlirt.com - Find Your Flirt in Your Area Today!">MyLocalFlirt</a> - 
      <a href="https://myflings.co.uk" target="_blank" class="m-0" title="MyFlings.co.uk - Discover Exciting Connections in the UK!">MyFlings</a> -
      <a href="https://myaffairs.co.uk" target="_blank" class="m-0" title="MyAffairs.co.uk - Explore Discreet Affairs in the UK!">MyAffairs</a> - 
      <a href="https://ukflirt.co.uk" target="_blank" class="m-0" title="UKFlirt.co.uk - Find Flirts and Connections in the UK!">UKFlirt</a> - 
      <a href="https://uktease.co.uk" target="_blank" class="m-0" title="UKTease.co.uk - Tease and Connect in the United Kingdom!">UKTease</a> - 
      <a href="https://ukdesire.co.uk" target="_blank" class="m-0" title="UKDesire.co.uk - Explore Your Desires in the United Kingdom!!">UKDesire</a> - 
      <a href="https://discreetfling.co.uk" target="_blank" class="m-0" title="DiscreetFling.co.uk - Explore Private Flings in the UK!">DiscreetFling</a>
      <hr>
      <h6>Deutschland</h6>
      <a href="https://flirtsuche.com" target="_blank" class="m-0" title="FlirtSuche.com - Finde Deinen perfekten Flirt heute online!">FlirtSuche</a> - 
      <a href="https://lokaltreffen.com" target="_blank" class="m-0" title="LokalTreffen - Finde Gleichgesinnte in Deiner Nähe heute!">LokalTreffen</a> -
      <a href="https://meinlokalflirt.com" target="_blank" class="m-0" title="MeinLokalFlirt - Finde heute Deinen Flirt in Deiner Stadt!">MeinLokalFlirt</a> - 
      <a href="https://meinlokalesingles.com" target="_blank" class="m-0" title="MeinLokaleSingles.com - Singles in Deiner Stadt heute!">MeinLokaleSingles</a> - 
      <a href="https://meinsingleschat.com" target="_blank" class="m-0" title="MeinSingleChat.com - Chat mit Singles in Deiner Nähe!">MeinSingleChat</a> - 
      <a href="https://hitzigesingles.com" target="_blank" class="m-0" title="HitzigeSingles.com - Heiße Singles in Deiner Nähe heute!">HitzigeSingles</a> - 
      <a href="https://lustigesingles.com" target="_blank" class="m-0" title="LustigeSingles.com - Spaß & Liebe in Deiner Nähe heute!">LustigeSingles</a>
  </div>
</div><!-- container -->
<?php include $base . '/includes/footer.php'; ?>
