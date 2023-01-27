<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);

$pst_id_v = $_POST['pst_id'];
require_once "../global/connection.php";

$query =
"DELETE FROM petstore
WHERE pst_id = :pst_id_p";

try
{
	$statement = $db->prepare($query);
	$statement->bindParam(':pst_id_p', $pst_id_v);
	$row_count = $statement->execute();
	$statement->closeCursor();

header('Location: index.php'); //sometimes, redirecting is needed (two trips to server)
}
	
catch(PDOException $e)
{
	$error = $e->getMessage();
	include('../global/error.php');
}
?>