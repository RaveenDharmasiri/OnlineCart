<?php
//including the database
include("db.php");

$pageName = "Register";

echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>".$pageName."</title>";

include ("headfile.html");

echo "<p>Register And Create A WorkedUp Account</p>";

echo 
	"
	<form action=getregister.php method=post>
	<table border=1>
		<tr>
			<td>First Name</td>
			<td>
				
					<input type = 'text' name='firstname'>
				
			</td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td>
				
					<input type = 'text' name='lastname'>
				
			</td>
		</tr>
		<tr>
			<td>Address</td>
			<td>
				
					<input type = 'text' name='address'>
				
			</td>
		</tr>
		<tr>
			<td>Postcode</td>
			<td>
				
					<input type = 'text' name='postcode'>
				
			</td>
		</tr>
		<tr>
			<td>Tel No</td>
			<td>
			
					<input type = 'text' name='telNo'>
			
			</td>
		</tr>
		<tr>
			<td>Email Address</td>
			<td>
			
					<input type = 'text' name='email'>
	
			</td>
		</tr>
		<tr>
			<td>Password</td>
			<td>
			
					<input type = 'text' name='password'>
		
			</td>
		</tr>
		<tr>
			<td>Confirm Password</td>
			<td>
			
					<input type = 'text' name='conPassword'>
		
			</td>
		</tr>
		<tr>
			<td>
				
					<input type='submit' value='Register'>
				
			</td>
			<td>
				
					<input type='button' value='Clear Form'>
				
			</td>
		</tr>
	</table>
	</form>";





include("footfile.html");



?>