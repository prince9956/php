<?php

include 'conn.php';

$ID = $_GET['ID'];

$sql = " DELETE FROM `don` WHERE ID = $ID ";

mysqli_query($con,$sql);

header('location:display.php');


?>