<?php
$base = __DIR__;
	define("TITLE", "Home");
    include $base . '/includes/arr_prov_nl.php';
    include $base . '/includes/arr_prov_be.php';
    include $base . '/includes/arr_prov_uk.php';
    include $base . '/includes/arr_prov_de.php';
    include $base . '/includes/arr_prov_at.php';
    include $base . '/includes/arr_prov_ch.php';
    include $base . '/includes/array_tips.php';
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
    <p><a href="index.php">18date.net</a> is de contactadvertentie website om <b>snel en gratis</b> in contact te komen met jonge <b>vrouwen bij jou in de buurt</b>. Hier kun je jezelf <b>anoniem en gratis inschrijven</b> met een zelfgekozen profielnaam. Ook blijft je e-mailadres altijd geheim voor andere leden. Voor wie echt helemaal anoniem wil blijven, bestaat de mogelijkheid om geen foto op het profiel te tonen.</p>
    <p>Of je nou bewust op zoek bent naar een eenmalige sexdate of geregeld wil afspreken met dames voor een meerdere sexdates? Op <a href="index.php">18date.net</a> vind je <b>meer dan 10.000 single vrouwen die openstaan voor een sexdate</b>. Duizenden singles zijn op dit moment op zoek naar een sexdate, een sexpartner of meerdere sexdates. Van zoeken naar een sexdate binnen enkele dagen, gelijk sex bij jou in de buurt tot meerdere sexdates in een week. Bij <a href="index.php">18date.net</a> heb jij het snelst een sexdate in de BeNeLux! Kies in welk land jij wil zoeken naar een sexdate.</p>
  </div>
  <div id="top-banner"></div>
  <h2 class="jumbotron text-center" id="nederland">Nederland</h2>
  <div class="row text-center" id="keuze">
    <?php 
                              foreach ($nl as $provnl => $item) {
                                  $slug = ($provnl === 'limburg') ? 'sexdate-limburg-nl' : 'sexdate-' . $provnl;
                      ?>
                      <div class="col-lg-3 col-md-6 mb-4">
            <div class="card h-100 text-left">
              <a href="<?php echo $slug; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpg" alt="Sexdate <?php echo $item['name']; ?>" @error="imgError"></a>
              <div class="card-body">
                <a href="<?php echo $slug; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
                <hr>
                <p class="card-text"><?php echo $item['info']; ?></p>
              </div>
              <a href="<?php echo $slug; ?>" class="card-footer btn btn-primary">Sexdate <?php echo $item['name']; ?></a>
            </div>
          </div>
    <?php
      }
    ?>
  </div>

  <h2 class="jumbotron text-center" id="belgie">België</h2>
  <div class="row text-center" id="keuze">
    <?php
      foreach ($be as $provbe => $item) {
          $slug = ($provbe === 'limburg') ? 'sexdate-limburg-be' : 'sexdate-' . $provbe;
    ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="<?php echo $slug; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpg" alt="Sexdate <?php echo $item['name']; ?>" @error="imgError"></a>
        <div class="card-body">
          <a href="<?php echo $slug; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
          <hr>
          <p class="card-text"><?php echo $item['info']; ?></p>
        </div>
        <a href="<?php echo $slug; ?>" class="card-footer btn btn-primary">Sexdate <?php echo $item['name']; ?></a>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
  <h2 class="jumbotron text-center" id="uk">United Kingdom</h2>
  <div class="row text-center" id="keuze">
    <?php foreach ($uk as $provuk => $item) { ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="sexdate-<?php echo $provuk; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpg" alt="Sexdate <?php echo $item['name']; ?>" @error="imgError"></a>
        <div class="card-body">
          <a href="sexdate-<?php echo $provuk; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
          <hr>
          <p class="card-text"><?php echo $item['info']; ?></p>
        </div>
        <a href="sexdate-<?php echo $provuk; ?>" class="card-footer btn btn-primary">Sexdate <?php echo $item['name']; ?></a>
      </div>
    </div>
    <?php } ?>
  </div>
  <h2 class="jumbotron text-center" id="duitsland">Duitsland</h2>
  <div class="row text-center" id="keuze">
    <?php foreach ($de as $provde => $item) { ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="sexdate-<?php echo $provde; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpg" alt="Sexdate <?php echo $item['name']; ?>" @error="imgError"></a>
        <div class="card-body">
          <a href="sexdate-<?php echo $provde; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
          <hr>
          <p class="card-text"><?php echo $item['info']; ?></p>
        </div>
        <a href="sexdate-<?php echo $provde; ?>" class="card-footer btn btn-primary">Sexdate <?php echo $item['name']; ?></a>
      </div>
    </div>
    <?php } ?>
  </div>
  <h2 class="jumbotron text-center" id="oostenrijk">Oostenrijk</h2>
  <div class="row text-center" id="keuze">
    <?php foreach ($at as $provat => $item) { ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="sexdate-<?php echo $provat; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpg" alt="Sexdate <?php echo $item['name']; ?>" @error="imgError"></a>
        <div class="card-body">
          <a href="sexdate-<?php echo $provat; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
          <hr>
          <p class="card-text"><?php echo $item['info']; ?></p>
        </div>
        <a href="sexdate-<?php echo $provat; ?>" class="card-footer btn btn-primary">Sexdate <?php echo $item['name']; ?></a>
      </div>
    </div>
    <?php } ?>
  </div>
  <h2 class="jumbotron text-center" id="zwitserland">Zwitserland</h2>
  <div class="row text-center" id="keuze">
    <?php foreach ($ch as $provch => $item) { ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="sexdate-<?php echo $provch; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpg" alt="Sexdate <?php echo $item['name']; ?>" @error="imgError"></a>
        <div class="card-body">
          <a href="sexdate-<?php echo $provch; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
          <hr>
          <p class="card-text"><?php echo $item['info']; ?></p>
        </div>
        <a href="sexdate-<?php echo $provch; ?>" class="card-footer btn btn-primary">Sexdate <?php echo $item['name']; ?></a>
      </div>
    </div>
    <?php } ?>
  </div>
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
