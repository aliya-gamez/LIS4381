<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Alex's portfolio which reflects coursework projects and assignments done, and the requirements reflected to do so.">
		<meta name="author" content="Alex Gamez, Student">
    <link rel="icon" href="favicon.ico">

		<title>LIS4381 - Assignment 3</title>		
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
					<strong>Description:</strong>
Frequently, not only will you be asked to design and develop Web applications, but you will also be asked
to create (design) database solutions that interact with the Web application—and, in fact, the data
repository is the *core* of all Web applications. Hence, the following business requirements.
				</p>
				<p class="text-justify">
				A pet store owner, who owns a number of pet stores, requests that you develop a Web application
whereby he and his team can record, track, and maintain relevant company data, based upon the
following business rules:
				</p>
				
				<ul class="text-justify">
				<li>A customer can buy many pets, but each pet, if purchased, is purchased by only one customer</li>
				<li>A store has many pets, but each pet is sold by only one store.</li>
				</ul>
				
				<p class="text-justify">
				<strong>Remember:</strong>
				an organization’s business rules are the key to a well-designed database.
				</p>
				
				<p class="text-justify">
				For the Pet's R-Us business, it's important to ask the following questions to get a better idea of how the
database and Web application should work together:
				</p>
				
				<ul class="text-justify">
				<li>Can a customer exist without a pet? Seems reasonable. Yes. (optional)</li>
				<li>Can a pet exist without a customer? Again, yes. (optional)</li>
				<li>Can a pet store not have any pets? It wouldn’t be a pet store. (mandatory)</li>
				<li>Can a pet exist without a pet store? Not in this design. (mandatory)</li>
				</ul>
				
				<p class="text-justify">
				<strong>Solutions</strong>
				</p>
				<ul class="text-justify">
				<li><a href="docs/a3.mwb">A3.mwb</a></li>
				<li><a href="docs/a3.sql">A3.sql</a></li>
				</ul>

				<h4>Petstore ERD</h4>
				<img src="img/erd.png" class="img-responsive center-block" alt="Petstore ERD">

				<h4>My Event - Opening Interface</h4>
				<img src="img/opening_interface.png" class="img-responsive center-block" alt="opening interface">

				<<h4>My Event - Processing Interface</h4>
				<img src="img/processing_interface.png" class="img-responsive center-block" alt="processing interface">
				
				<?php include_once "global/footer.php"; ?>

			</div> <!-- starter-template -->
    </div> <!-- end container -->

		<!-- Bootstrap JavaScript
				 ================================================== -->
		<!-- Placed at end of document so pages load faster -->		
		<?php include_once("../js/include_js.php"); ?>			
  </body>
</html>
