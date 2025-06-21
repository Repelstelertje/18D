<?php
$base = __DIR__;
define("TITLE", "Sexdate België");
include $base . '/includes/arr_prov_be.php';
$canonical = 'https://18date.net/sexdate-belgie';
$pageTitle = 'Sexdate België | 18Date.net';
include $base . '/includes/header.php';
?>
<div class="container">
  <h2 class="jumbotron text-center" id="belgie">Sexdate België</h2>
  <div class="row text-center" id="keuze">
    <?php
      foreach ($be as $provbe => $item) {
          $slug = ($provbe === 'limburg') ? 'sexdate-limburg-be' : 'sexdate-' . $provbe;
    ?>
    <div class="col-lg-3 col-md-6 mb-4">
      <div class="card h-100 text-left">
        <a href="<?php echo $slug; ?>"><img class="card-img-top" src="img/front/<?php echo $item['img']; ?>.jpeg" alt="Sexdate <?php echo $item['name']; ?>" @error="imgError"></a>
        <div class="card-body">
          <a href="<?php echo $slug; ?>"><h4 class="card-title"><?php echo $item['name']; ?></h4></a>
          <hr>
          <p class="card-text"><?php echo $item['info']; ?></p>
        </div>
        <a href="<?php echo $slug; ?>" class="card-footer btn btn-primary">Sexdate <?php echo $item['name']; ?></a>
      </div>
    </div>
    <?php } ?>
  </div>
</div><!-- container -->
<?php include $base . '/includes/footer.php'; ?>
