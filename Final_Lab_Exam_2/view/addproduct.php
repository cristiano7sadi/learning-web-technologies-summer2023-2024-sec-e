<!DOCTYPE html>
<html lang="en">
<head>
   
    
</head>
<body>


	<fieldset>
				<legend><h3>PRODUCT</h3></legend>
				Product Name<br/>
			   <input type="text" id="name" name="name">
               <span style="color: red;"  id="nameerror"></span><br/>
				Price<br/>
				<input type="number" id="price" name="price">
                <span style="color: red;"  id="priceerror"></span><br />
                Quantity<br/>
                <input type="number" id="quantity" name="quantity">
                <span style="color: red;"  id="qnerror"></span><br />
                
                <p style="color: green;" id="success"></p>

				<input type="Button" name="submit" value="Add Product" onclick="product()" >
				
		</fieldset>
		<script  src="../JS/addproduct.js"></script> 	
	
	
    
</body>
</html>