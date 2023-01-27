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
				<p class="text-justify">
					<strong>Assignment Requirements:</strong> 
					<ul class="text-justify">
					<li>Distributed Version Control with Git and Bitbucket</li>
					<li>Development Installations</li>
					</ul>
				</p>
				<p class="text-justify">
					<br>
					<strong>Included:</strong>
					<ul class="text-justify">
					<li>Screenshot of AMPPS Installation My PHP Installation</li>
					<li>Screenshot of running java Hello</li>
					<li>Screenshot of running Android Studio - My First App</li>
					</ul>
				</p>
				<br>
				
				<h4>Java Installation</h4>
				<img src="img/jdk_installs.png" class="img-responsive center-block" alt="JDK Installation">

				<h4>Android Studio Installation</h4>
				<img src="img/android_install.png" class="img-responsive center-block" alt="Android Studio Installation">

				<h4>AMPPS Installation</h4>
				<img src="img/ampps_install.png" class="img-responsive center-block" alt="AMPPS Installation">
				
				<?php include_once "global/footer.php"; ?>

			</div> <!-- starter-template -->
    </div> <!-- end container -->

		<!-- Bootstrap JavaScript
				 ================================================== -->
		<!-- Placed at end of document so pages load faster -->		
		<?php include_once("../js/include_js.php"); ?>			
  </body>
</html>
