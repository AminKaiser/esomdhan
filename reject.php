<?php
require('dbconn.php');
$id=$_REQUEST['id'];
$query = "DELETE FROM adminapproveinfo WHERE id=$id"; 
$result = mysqli_query($con,$query);
header("Location: adminapproval.php"); 
?>