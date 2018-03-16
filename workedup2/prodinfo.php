<?php
session_start();
include("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Product Information";
//retrieve the product id passed from the previous page using the $_GET superglobal variable
//store the value in a variable called $prodid
$prodid=$_GET['u_prodid'];
//echo "<p>Selected product Id: ".$prodid;
//query the product table to retrieve the record for which the value of the product id
//matches the product id of the product that was selected by the user
$prodSQL="select prodId, prodName, prodPicName,
prodDescrip , prodPrice, prodQuantity from product
where prodId=".$prodid;
//execute SQL query
$exeprodSQL=mysqli_query($conn, $prodSQL) or die(mysqli_error());
//create array of records & populate it with result of the execution of the SQL query
$thearrayprod=mysqli_fetch_array($exeprodSQL);
//display product name in capital letters

//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";


//include head layout
include ("headfile.html");
echo "<p></p>";
//display name of the page and some random text
// displaying the product name
echo "<p><center><b>".strtoupper($thearrayprod['prodName'])."</b></center><br>";

//displaying product image
echo "<center><img src=images/".$thearrayprod['prodPicName']."></center>";

echo "<h2>".$pagename."</h2>";
echo "<p>".($thearrayprod['prodDescrip'])."</p>";
echo "<p><center> <b>Price : ".strtoupper($thearrayprod['prodPrice'])."</b></p></center>";

echo "<form action=basket.php method=post>";
echo "<p><center>Select Quantity: ";
echo 
    "<select name='prodQuantity'>
      <option value='1'>1</option>
      <option value='2'>2</option>
      <option value='3'>3</option>
      <option value='4'>4</option>
      <option value='5'>5</option>
    </select>";



echo "<input type=submit name='submit' value='Add to Basket'>";
echo "<input type=hidden name=h_prodid value=".$prodid.">";
echo "</center>";
echo "</form>";
//include head layout
include("footfile.html");
?>