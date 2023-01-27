<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="Alex's portfolio which reflects coursework projects and assignments done, and the requirements reflected to do so.">
		<meta name="author" content="Alex Gamez, Student">
		<link rel="icon" href="favicon.ico">

		<title>Alex Gamez's Portfolio</title>

		<?php include_once("css/include_css.php"); ?>	

		<!-- Carousel styles -->
		<style type="text/css">
		 h2
		 {
			 margin: 0;     
			 color: darkolivegreen;
			 padding-top: 50px;
			 font-size: 52px;
			 font-family: "trebuchet ms", sans-serif;    
		 }
		 h2 span
		 {
			 background-color: white;
			 font-weight: bold;
		 }
		 h3
		 {
			 font-weight: bold;
		 }
		 .item
		 {
			 background: #333;    
			 text-align: center;
			 height: 300px !important;
		 }
		 .carousel
		 {
			 margin: 20px 0px 20px 0px;
		 }
		 .bs-example
		 {
			 margin: 20px;
		 }
		</style>

	</head>
	<body>

		<?php include_once("global/nav_global.php"); ?>
		
		<div class="container">
			<div class="starter-template">
				<div class="page-header">
					<?php include_once("global/header.php"); ?>	
				</div>

				<!-- Start Bootstrap Carousel  -->
				<div class="bs-example">
					<div
						id="myCarousel"
								class="carousel"
								data-interval="3000"
								data-pause="hover"
								data-wrap="true"
								data-keyboard="true"			
								data-ride="carousel">
						
    				<!-- Carousel indicators -->
						<ol class="carousel-indicators">
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
						</ol>   
						<!-- Carousel items -->
						<div class="carousel-inner">

							<!-- -Note: you will need to modify the code to make it work with *both* text and images.  -->
							<div class="active item" style="background: url(img/yourimage.jpg) no-repeat left center; background-size: cover;">
							<h2><span>Welcome!</span></h2>
								<div class="container">
									<div class="carousel-caption">
										<h3>This is my online portfolio</h3>
										<p class="lead">Included Coursework: LIS4381</p>
                        </div>
                      </div>
                    </div>
              
							<div class="item" style="background: url(img/slide2.jpg) no-repeat left center; background-size: cover;">
								<h2><span> About Me </span></h2>
								<div class="carousel-caption">
									<h3>Aspiring web developer!</h3>
									<p>Pursuing an IT degree in FSU currently.</p>									
								</div>
							</div>

							<div class="item" style="background: url(img/slide3.jpg) no-repeat left center; background-size: cover;">
								<h2><span>Contact</span></h2>
								<div class="carousel-caption">
									<h3>Alex is available for contact anytime.</h3>
									<p>a.gamez.webdev@gmail.com</p>									
								</div>
							</div>

						</div>
						<!-- Carousel nav -->
						<a class="carousel-control left" href="#myCarousel" data-slide="prev">
							<span class="glyphicon glyphicon-chevron-left"></span>
						</a>
						<a class="carousel-control right" href="#myCarousel" data-slide="next">
							<span class="glyphicon glyphicon-chevron-right"></span>
						</a>
					</div>
				</div>
				<!-- End Bootstrap Carousel  -->
				
				<?php
				include_once "global/footer.php";
				?>

			</div> <!-- end starter-template -->
    </div> <!-- end container -->

		<?php include_once("js/include_js.php"); ?>	
	  
  </body>
</html>
