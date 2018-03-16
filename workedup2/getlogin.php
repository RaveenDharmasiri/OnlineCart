<?php
session_start();
//create a variable called $pagename which contains the actual name of the page
$pagename="Login Confirmation";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";
//include head layout
include ("headfile.html");
echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

$email = $_POST['login_email'];
$password = $_POST['login_password'];



if(!$email or !$password){
    echo "Your form is incomplete<br>";
    echo "Please fill in all required details<br>";
    echo "Go back to <a href='login.php'>Login</a>";
}else{
    $_SESSION['loggedInUser'][$email] = [$password];

    $SQl3 = "select * from users where userEmail =".$email.";";
    $exeSQL3 = mysql_query($SQl3) or @$errno = mysql_errno();

    if(@$errno!=0){
        echo "Sorry the email address that you entered was not recognized or some error occured";
    }
}

echo "<br>";
//include head layout
include("footfile.html");
?>