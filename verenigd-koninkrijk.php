<?php
$base = __DIR__;
define("TITLE", "Sexdate United Kingdom");
include $base . '/includes/arr_prov_uk.php';
$canonical = 'https://18date.net/sexdate-verenigd-koninkrijk';
$pageTitle = 'Sexdate United Kingdom | 18Date.net';
include $base . '/includes/header.php';
?>
<div class="container">
  <h2 class="jumbotron text-center" id="uk">Sexdate United Kingdom</h2>
  <div class="row text-center" id="keuze">
    <?php foreach ($uk as $provuk => $item) { ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="sexdate-<?php echo $provuk; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpeg" alt="Sexdate <?php echo $item['name']; ?>" @error="imgError"></a>
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
</div><!-- container -->
<?php include $base . '/includes/footer.php'; ?>
