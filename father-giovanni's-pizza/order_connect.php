<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Customer Information</title>
</head>
  
<body>
    <center>
<?php
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
		$sql = "insert into customer_info (buyerName, buyerNumber, buyerAddress1, buyerAddress2) values('$buyerName', '$buyerNumber', '$buyerAddress1', '$buyerAddress2')";		
		           				
		if(mysqli_query($conn, $sql)){         
            echo "<h3>Thank you for your order. We will have it delivered soon! \n\nHere is the information you entered:</h3>"; 
  
            echo nl2br("\nName: $buyerName\n Phone Number: $buyerNumber\n "
                . "Address Line1: $buyerAddress1\n Address Line2: $buyerAddress2 \n\n");		
			$last_id = mysqli_insert_id($conn);
				
			echo "<h3>If you would like to update any information, please go to <a href='edit.php?id=$last_id'>Edit</a> page.</h3>";
         
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
