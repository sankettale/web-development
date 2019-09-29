<?php

include "connection.php";

$id = $_GET['id'];
$q = " DELETE FROM `signin` WHERE  id = $id ";
mysqli_query($con,$q);
header('location:bsdisplay.php');
?> 