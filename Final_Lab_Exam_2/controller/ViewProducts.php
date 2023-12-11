<?php
 require_once('../model/ProductModel.php');
 
 $results='';

 if (isset($_POST['submit'])) {
    $results = ViewProducts();



}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Document</title>
</head>
<body>


    
    <table border="1">
        <tr>
        <td>Product Name</td>
            <td>Price</td>
            <td>Quantity</td>
            
          
            
        </tr>

        <?php for ($i = 0; $i < count($results); $i++) { ?>
         
    
        <tr>

        <td><?=$results[$i]['name']?>
           
                
            </td>
            <td><?=$results[$i]['price']?>
            
                
            </td>
            <td><?=$results[$i]['quantity']?>
            
                
            </td>
            


        
            
            
        </tr>
        </form>
        
   
<?php } ?>
    </table>

    
</body>
</html>







