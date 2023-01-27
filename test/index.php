<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Alex's portfolio which reflects coursework projects and assignments done, and the requirements reflected to do so.">
		<meta name="author" content="Alex Gamez, Student">
    <link rel="icon" href="favicon.ico">

		<title>LIS4381 - Assignment 1</title>		
		<?php include_once("../css/include_css.php"); ?>
		
		<!-- styling for assignment images -->
		<style type="text/css">
		img
		{
			border: 3px solid black;
		}
		</style>
  </head>

  <body>

		<?php include_once("../global/nav.php"); ?>
		
		<div class="container">
			<div class="starter-template">
				<div class="page-header">
					<?php include_once("global/header.php"); ?>	
				</div>
				
				<h4><a target="_blank" href="http://localhost:8080/repos/lis4381/test/rss/index.php"> RSS Feed </a></h4>
				<br>
			
				<?php include_once "global/footer.php"; ?>

			</div> <!-- starter-template -->
    </div> <!-- end container -->

		<!-- Bootstrap JavaScript
				 ================================================== -->
		<!-- Placed at end of document so pages load faster -->		
		<?php include_once("../js/include_js.php"); ?>			
  </body>
</html>
