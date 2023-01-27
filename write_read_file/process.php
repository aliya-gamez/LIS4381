<?php
//show errors: at least 1 and 4...
ini_set('display_errors', 1);
//ini_set('log_errors', 1);
//ini_set('error_log', dirname(__FILE__) . '/error_log.txt');
error_reporting(E_ALL);
		
?>

<!--START OF HTML FILE-->
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Alex's portfolio which reflects coursework projects and assignments done, and the requirements reflected to do so.">
	<meta name="author" content="Alex Gamez, Student">
	<link rel="icon" href="favicon.ico">

	<title>LIS4381 - Read/Write File</title>
	<?php include_once("../css/include_css.php"); ?>
</head>
<body>

	<?php include_once("../global/nav.php"); ?>

	<div class="container">
		<div class="starter-template">
					<div class="page-header">
						<?php include_once("global/header.php"); ?>	
					</div>
					
					<p class="text-justify">
						<?php
							$myfile = fopen("file.txt", "w+") or exit("Unable to open file!");
							$txt = $_POST['comment'];
							fwrite($myfile, $txt);
							fclose($myfile);
							
							$myfile = fopen("file.txt", "r+") or exit("Unable to open file!");
							while(!feof($myfile))
							{
								echo fgets($myfile) . "<br />";
							}
							
							fclose($myfile);
						?>
					</p>
					
						
					<?php include_once "global/footer.php"; ?>
		</div>
	</div>
	<?php include_once("../js/include_js.php"); ?>
</body>
</html>
<!--END OF HTML FILE>
