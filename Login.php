<?php

session_start();
if(isset($_POST['submit']))
	 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
     

</tr>

	
	
		<fieldset>
			<legend>LOGNIN</legend>
			<form action="logincheck.php" method="POST">
		<table>
			<tr>
				<td>User Name :</td>
				<td><input type="text" name="username" value =""></td>
			</tr>
			<tr>
				<td>Password :</td>
				<td><input type="password" name="password" value =""></td>
			
			</tr>

		</table>
		
		<hr>
			<input type="submit" name="submit" value="Submit">
			
	
		</fieldset>
	</form>
</body>
</html>
                
