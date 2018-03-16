<?php
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) ;
if (!$conn)
 {
 die('Could not connect: ' . mysqli_error());
 }
mysqli_select_db($conn, 'serverside');
?>