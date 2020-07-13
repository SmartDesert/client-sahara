<?php

require './dbconnect.php';
$serial_id=$_REQUEST['serial_id'];

$des=$_REQUEST['des'];
/*
 * Inserting data to table
 * */

$query=mysqli_query($db_connect,"INSERT INTO courses (serial_id,des) VALUES ('$serial_id','$des')") or die(mysqli_error($db_connect));

mysqli_close($db_connect);
header("location:courses.php");
?>