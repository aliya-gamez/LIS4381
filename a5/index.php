<?php
//https://datatables.net/examples/basic_init/table_sorting.html
//database connection code goes here...
	
	require_once "../global/connection.php";
	
	$query = "SELECT * FROM petstore ORDER BY pst_id";
	
	$statement = $db->prepare($query);
	$statement->execute(); 
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Alex's portfolio which reflects coursework projects and assignments done, and the requirements reflected to do so.">
	<meta name="author" content="Alex Gamez, Student">
	<link rel="icon" href="favicon.ico">

		<title>LIS4381 - Assignment5</title>
		<?php include_once("../css/include_css.php"); ?>
</head>
<body>

	<?php include_once("../global/nav.php"); ?>
	
	<div class="container-fluid">
		 <div class="starter-template">
						<div class="page-header">
							<?php include_once("global/header.php"); ?>	
						</div>

						<h2>Pet Stores</h2>

<a href="add_petstore.php">Add Pet Store</a>
<br />

 <div class="table-responsive">
	 <table id="myTable" class="table table-striped table-condensed" >

		 <!-- Code displaying PetStore data with Edit/Delete buttons goes here // -->
		 <thead>
			<tr>
				<th class="text-center">Name</th>
				<th class="text-center">Street</th>
				<th class="text-center">City</th>
				<th class="text-center">State</th>
				<th class="text-center">Zip</th>
				<th class="text-center">Phone</th>
				<th class="text-center">Email</th>
				<th class="text-center">URL</th>
				<th class="text-center">YTD Sales</th>
				<th class="text-center">Notes</th>
				<th class="text-center">&nbsp;</th>
				<th class="text-center">&nbsp;</th>
			</tr>
		</thead>
		
		<?php
		$result = $statement->fetch();
		while($result != null)
		{
		
		?>
		
		<tr class="text-left">
			<td><?php echo htmlspecialchars($result['pst_name']); ?></td>
			<td><?php echo htmlspecialchars($result['pst_street']); ?></td>
			<td><?php echo htmlspecialchars($result['pst_city']); ?></td>
			<td><?php echo htmlspecialchars($result['pst_state']); ?></td>
			<td><?php echo htmlspecialchars($result['pst_zip']); ?></td>
			<td><?php echo htmlspecialchars($result['pst_phone']); ?></td>
			<td><?php echo htmlspecialchars($result['pst_email']); ?></td>
			<td><?php echo htmlspecialchars($result['pst_url']); ?></td>
			<td class="text-right"><?php echo htmlspecialchars($result['pst_ytd_sales']); ?> </td>
			
			<td><?php echo htmlspecialchars($result['pst_notes']); ?></td>
			
			<td>
				<form action="edit_petstore.php" method="post" id-"edit_petstore">
					<input type="hidden" name="pst_id" value="<?php echo $result['pst_id']; ?>" />
					<button type="submit" class="btn btn-info">Edit
					</button>
				</form>
			</td>
			
			<td>
				<form
					onsubmit="return confirm('Do you really want to delete record?');"
						action = "delete_petstore.php"
						method = "post"
						id="delete_petstore">
					
					<input type ="hidden" name="pst_id" value="<?php echo $result['pst_id']; ?>" />
					<button type="submit" class="btn btn-danger">Delete
					</button>
				</form>		
			</td>
		</tr>
		
		<?php
		$result = $statement->fetch();
		}
		$statement->closeCursor();
		$db = null;
		?>

	 </table>
 </div> <!-- end table-responsive -->
 	
				<?php include_once "global/footer.php"; ?>	

			</div> <!-- end starter-template -->
  </div> <!-- end container -->

	<!-- Bootstrap JavaScript
	================================================== -->
	<!-- Placed at end of document so pages load faster -->
				<?php include_once("../js/include_js.php"); ?>

		<script type="text/javascript">
	 $(document).ready(function(){
		 $('#myTable').DataTable({
				 responsive: true,				 
				 //https://datatables.net/reference/option/lengthMenu
				 //1st inner array: number of actual records displayed
				 //2nd inner array: number listed in the drop-down menu
				 //Note: -1 is used to disable pagination (i.e., display all rows), use with "All"
				 //Note: pageLength property automatically set to first value given in array: here, 10
				 "lengthMenu": [ [10, 25, 50, -1], [10, 25, 50, "All"] ],
	 //permit sorting (i.e., no sorting on last two columns: delete and edit)
    "columns":
		[
      null,
      null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
		null,
     { "orderable": false },
     { "orderable": false }			
    ]
		 });
});
	</script>

</body>
</html>
