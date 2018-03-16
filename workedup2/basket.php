<?php
// starting a session
session_start(); 
// connecting to the database
include("db.php"); 

global $total;


//create a variable called $pagename which contains the actual name of the page
$pagename="Ordering Basket";

// extracting the product id

// capturing the quantity of the products   
//$reququantity = $_POST['prodQuantity'];



//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";
//include head layout
include ("headfile.html");
echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";


if(isset($_POST['submit'])){
    $prodId = $_POST['h_prodid'];
    $reququantity = $_POST['prodQuantity'];

    $_SESSION['basket'][$prodId] = $reququantity;

    echo "<p><b>Your basket has been updated</b></p>";

}else{

    echo "<p><b>Existing Basket</b></p>";

}


if(isset($_SESSION['basket'])){
    echo 
    "<table border=2>

        <tr>
            <th>Product</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Sub Total</th>
        </tr>";

        foreach($_SESSION['basket'] as $productId => $quantity){
            $SQl = "SELECT prodName, prodPrice FROM product WHERE prodId = ".$productId.";";
            $exeSQL = mysqli_query($conn, $SQl) or die(mysqli_error());

            while($arrayProd = mysqli_fetch_array($exeSQL)){
                echo "<tr> <td>";
                echo $arrayProd['prodName'];
                echo "</td><td>";
                echo $arrayProd['prodPrice'];
                echo "</td><td>";
                echo $quantity;
                echo "</td><td>";
                echo $arrayProd['prodPrice']*$quantity;
                echo "</td></tr>";
                $total = $total + $arrayProd['prodPrice']*$quantity;
            }
        }

        echo "</table>";

        echo $total;
}else{
    echo "There are no items in the basket";
}

//include head layout
include("footfile.html");
?>