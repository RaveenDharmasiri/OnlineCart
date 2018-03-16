<?php
//create a variable called $pagename which contains the actual name of the page
$pagename="Login";
//call in the style sheet called ystylesheet.css to format the page as defined in the style sheet
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
//display window title
echo "<title>".$pagename."</title>";
//include head layout
include ("headfile.html");
echo "<p></p>";
//display name of the page and some random text
echo "<h2>".$pagename."</h2>";

echo "
<table border=5>
<form action=getlogin.php method=post>
    <tr><td><label>Email</label></td><td><input placeholder='Enter your email' name='login_email' type='text'/></td></tr>
    <tr><td><label>Password</label></td><td><input placeholder='Enter your password' name='login_password'type='password'></td></tr>
    <tr><td><input type=submit value='Login'/></td><td><button>Clear Form</button></td></tr>
</form>
</table>";
echo "<br>";







//include head layout
include("footfile.html");
?>