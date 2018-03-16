<?php
session_start();
include ("db.php");
//create a variable called $pagename which contains the actual name of the page
$pagename="Register Confirmation";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";
//include head layout
include ("headfile.html");
echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

$fName = $_POST['firstname'];
$lName = $_POST['lastname'];
$address = $_POST['address'];
$postcode = $_POST['postcode'];              
$telNo = $_POST['telNo'];
$emailAddress = $_POST['email'];
$password = $_POST['password'];
$conPassword = $_POST['conPassword'];

$reg = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

if(!$fName or !$lName or !$telNo or !$emailAddress or !$password){
	echo "Required Fields are empty. Please enter information.";
	echo "Go Back <a href='Register.php'>Register</a>";
}else if($password != $conPassword){
    echo "The 2 passwords that you entered do no match";
    echo "<br>";
    echo "Please enter them correctly";
    echo "<br>";
    echo "Go Back <a href='Register.php'>Register</a>";
}else if(!preg_match($reg, $emailAddress)){
	echo "Your email is not valid. Please try Re-Entering it";
	echo "Go Back <a href='Register.php'>Register</a>";
}else{
    $sql = "INSERT INTO users(userFName, userSName, userAddress, userPostCode, userTelNo, userEmail, userPassword)
        VALUES
        ('".$fName."', '".$lName."', '".$address."', '".$postcode."', '".$telNo."', '".$emailAddress."', '".$password."')";

        // this is to run the above query and if any error happens @$errno will catch it.
	// $exeSql = mysqli_query($conn, $sql) or @$errno = mysqli_errno();
	$exeSql = mysql_query($sql) or @$errno = mysql_errno();
	
    if(@$errno==1062){
        echo "There is an error with your registration";
        echo "Email you entered already exist";
        echo "Go Back <a href='Register.php'>Register</a>";
    }else if(@$errno!=0){
        echo "There is something wrong with the information that you have provided";
        echo "Go Back <a href='Register.php'>Register</a>";
    }else{
        echo "You have been successfully registered<br>";
        echo "Please <a href='login.php'>Login</a>";
        //add the link to the login page
    }
}




//include head layout
include("footfile.html");
?>