<?php
require('dbconn.php');
$problem_id=$_REQUEST['problem_id'];
$query = "DELETE FROM probleminfo WHERE problem_id=$problem_id"; 
$result = mysqli_query($con,$query);
header("Location: myproblem.php"); 
?>