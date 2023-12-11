<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Document</title>
	
</head>
<body>




					<fieldset>
						<legend><h3>Signup</h3></legend>


                        Username<br/>
                        <input type="text" id="username" name="username">
						<span style="color: red;"  id="usernameerror"></span><br><br>
						Name<br/> 
                        <input type="text" id="name" name="name">
						<span style="color: red;"  id="nameerror"></span><br><br>
						Password<br/>
                        <input type="password" id="password" name="password">
						<span style="color: red;"  id="passerror"></span><br><br>
						Confirm Password<br>
                        <input type="password" id="confirm_password" name="confirm_password"><br><br>
                        Email:

     
                        <input type="email" id="email"  name="email" >
						<span style="color: red;"  id="emailerror"></span><br><br>
						
						Role<br/>
						<input type="radio" id="role"name="role" value="Buyer"/>Buyer
						<input type="radio" id="role"  name="role" value="seller"/>Seller
                       
						<span style="color: red;"  id="roleerror"></span><br><br>
						
						<p style="color: green;" id="success"></p>
						<input type="button" name="submit" value="Sign Up" onclick="abc()">
						
						<a href="../view/login.php">Sign In</a>
					</fieldset>
					<script src="../JS/signup.js"></script>
				                                  
					
	       
    
         </body>
</html>