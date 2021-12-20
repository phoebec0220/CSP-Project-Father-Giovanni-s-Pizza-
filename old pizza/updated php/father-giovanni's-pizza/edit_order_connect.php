<!DOCTYPE html>
<html>
  
<head>
    <title>Update Customer Information</title>
</head>
  
<body>
    <center>
<?php
	$buyerID = $_REQUEST['buyerID'];
	$buyerName = $_REQUEST['buyerName'];
	$buyerNumber = $_REQUEST['buyerNumber'];
	$buyerAddress1 = $_REQUEST['buyerAddress1'];
	$buyerAddress2 = $_REQUEST['buyerAddress2'];

	// Database connection
	$conn = new mysqli("localhost","root","", "pizza_website");
	if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());        
	} else {		
		$sql = "update customer_info set buyerName = '$buyerName', buyerNumber = '$buyerNumber', buyerAddress1 = '$buyerAddress1', buyerAddress2 = '$buyerAddress2' where id='$buyerID'";		
		           				
		if(mysqli_query($conn, $sql)){         
            echo "<h3>Information is updated successfully!</h3>"; 
  
         
		} else{
            echo "ERROR: " 
                . mysqli_error($conn);
        }	
				
		$conn->close();
	}
?>
</center>
</body>
  
</html>
