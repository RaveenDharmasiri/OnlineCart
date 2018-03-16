<?php
$dbhost = '127.0.0.1';
$dbuser = 'root';
$dbpass = '';
$conn = mysqli_connect($dbhost, $dbuser, $dbpass) ;
if (!$conn)
 {
 die('Could not connect: ' . mysql_error());
 }
mysql_select_db("serverside", $conn);
?>