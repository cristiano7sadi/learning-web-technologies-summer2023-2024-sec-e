<?php
    session_start();
    //print_r($_SESSION);

?>

<html>
<head>
	<title>Registration</title>
</head>
<center>
	<body>
		<form>
			<table border="0" cellspacing="0" cellpadding="0">
				<tr>
					<td>
						<fieldset>
							<legend><h3>REGISTRATION</h3></legend>
							Id<br/><input type="text" name="userID" value=""><br/>
							Password<br/><input type="password" name="password" value=""><br/>
							Confirm Password<br/><input type="password" name="confirmPassword" value=""><br/>
							Name<br/><input type="text" name="name" value=""><br/>
							User Type<hr/>
							<input type="radio" name="userType" />User
							<input type="radio" name="userType" />Admin
							<hr/>
							<input type="submit" name="submit" value="Sign Up">
							<a href="login.html">Sign In</a>
						</fieldset>
					</td>
				</tr>                                
			</table>
		</form>
	</body>
</center>
</html>
		