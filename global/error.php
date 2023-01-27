<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="My online portfolio that illustrates skills acquired while working through various project requirements.">
	<meta name="author" content="Mark K. Jowett, Ph.D.">
	<link rel="icon" href="favicon.ico">

		<title>LIS4381</title>
		<?php include_once("../css/include_css.php"); ?>
</head>
<body>
	<?php include_once("../global/nav.php"); ?>
	
	<div class="container">
			<div class="starter-template">
			<div class="row">
					<div class="col-xs-12">
						
						<div class="page-header">
							<?php include_once("global/header.php"); ?>	
						</div>

				<h2 class="top">Error!</h2>

<?php echo $error; ?>
<br /><br />

<?php
require_once "global/footer.php";
?>

					</div><!-- end grids -->
			</div><!-- end row -->
			</div><!-- end starter-template -->        
	</div><!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
	<?php include_once("../js/include_js.php"); ?>

</body>
</html>
