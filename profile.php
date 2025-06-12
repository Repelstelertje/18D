<?php
	define("TITLE", "Daten");
	include('includes/header.php');
?>
<!-- Page Content -->
    <div class="container" id="profiel">
      <div id="top-banner"></div>
      <div class="jumbotron my-4">
        <h1 class="text-center">Sexdate met {{ profile.name }} uit {{ profile.city }}</h1>
        <hr>
        <div class="row">

          <div class="col-sm-4 text-center">
            <img class="profile-pic" :src="profile.profile_image_big">
          </div>

          <div class="col-sm-8">
            <h4>Over {{ profile.name }}:</h4>
            <p>{{ profile.aboutme }}</p>
            <h4>Persoonlijke informatie:</h4>
            <p class="">
              <label class="info">Provincie:</label> {{ profile.province }}<br>
              <label class="info">Stad:</label> {{ profile.city }}<br>
              <label class="info">Leeftijd:</label> {{ profile.age }}<br>
              <label class="info">Relatiestatus:</label> {{ profile.relationship }}<br>
              <label class="info">Lengte:</label> {{ profile.length }}<br>
              <a :href="profile.url + '?ref=' + ref_id" class="btn btn-primary">Stuur gratis bericht</a>
            </p>
          </div>  
        </div>
      </div><!-- /.row -->
      <div id="footer-banner"></div>
    </div><!-- Container -->

<script>
  var api_url= "https://16hl07csd16.nl/profile/get/";
  var ref_id= "5"; //de ref_id vd landingwebsite
</script>

<?php 
  $type = "profile";
  include('includes/footer.php'); 
?>
