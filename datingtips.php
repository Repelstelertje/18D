<?php 
	define("TITLE", "Datingtips");

        include('includes/array_tips.php');

	function strip_bad_chars( $input ) {
		$output = preg_replace( "/[^a-zA-Z0-9_-]/", "",$input);
		return $output;
	}
	
        $tips = null;
        if(isset($_GET['item'])) {
                $datingtip = strip_bad_chars( $_GET['item'] );
                if (isset($datingtips[$datingtip])) {
                        $tips = $datingtips[$datingtip];
                }
        }

        if (!$tips) {
                header($_SERVER['SERVER_PROTOCOL'] . ' 404 Not Found');
                include '404.php';
                exit;
        }

        $metaDescription = $tips['info'];
        include('includes/header.php');
?>

<div class="container">
	<div class='jumbotron my-4'>
		<h1 class='text-center'><?php echo $tips["title"]; ?></h1>
	</div>
	<div class='jumbotron my-4'>
		<?php echo $tips["tekst"]; ?>
	</div>
</div>

<?php include('includes/footer.php'); ?>
