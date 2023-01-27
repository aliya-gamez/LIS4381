<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="MySQL Database Server Information.">
	<meta name="author" content="Mark K. Jowett, Ph.D.">
	<link rel="icon" href="favicon.ico">

	<title>MySQL Database Server Information</title>

		<?php include_once("../css/include_css.php"); ?>  

</head>
<body>

	<?php include_once("../global/nav.php"); ?>

		<div class="container">
			<div class="starter-template">
						<div class="page-header">
							<h2>MySQL Database Server Information</h2>
						</div>

<!-- Responsive table.  -->						
<div class="table-responsive">
<table id="myTable" class="table table-striped table-condensed" >

<?php
require_once "../global/connection.php";

//find out which PDO drivers are available
//print_r(PDO::getAvailableDrivers());

$attributes = 
array("AUTOCOMMIT", "CLIENT_VERSION", "CONNECTION_STATUS", "SERVER_INFO", "SERVER_VERSION");
		
foreach ($attributes as $val) 
{
		echo "<tr><th>$val:</th></tr>";
?>

<?php
		echo "<tr style='text-align: left;'><td>" . $db->getAttribute(constant("PDO::ATTR_$val")) . "</td></tr>";
?>

  <?php
	}
    $db = null; 
  ?>

	 </table>
 </div> <!-- end table-responsive -->

<?php
include_once "global/footer.php";
?>
					</div>
			</div>

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
	<?php include_once("../js/include_js.php"); ?>

</body>
</html>
