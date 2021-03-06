<!DOCTYPE html>
<html>
  
<head>
    <title>Insert Customer Information</title>
	 <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Meow+Script&family=Murecho&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="pizza.css" />
</head>
  
<body>
<header>
      <div class="logo">
        <img
          src="logo2.png"
          alt="chef holding pizza and giving thumbs up"
          height="200px"
          width="auto"
        />
      </div>
      <div class="headerR">
        <div class="title">Father Giovanni's Pizza</div>
        <div class="navbar">
          <div>
            <button><a href="index.html">Home</a></button>
          </div>
          <div>
            <button><a href="menu.html">Menu</a></button>
          </div>
          <div>
            <button><a href="about.html">About</a></button>
          </div>
          <div>
            <button><a href="pizzaorder.php">Order</a></button>
          </div>
        </div>
      </div>
  </header>
    <center>
<?php
	$buyerName = $_REQUEST['buyerName'];
	$buyerNumber = $_REQUEST['buyerNumber'];
	$buyerAddress1 = $_REQUEST['buyerAddress1'];
	$buyerAddress2 = $_REQUEST['buyerAddress2'];
	$nameLabel = "Name";
	$numberLabel = "Phone Number";
	$add1Label = "Address Line1";
	$add2Label = "Address Line2";

	// Database connection
	$conn = new mysqli("localhost","root","", "pizza_website");
	if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());        
	} else {		
		$sql = "insert into customer_info (buyerName, buyerNumber, buyerAddress1, buyerAddress2) values('$buyerName', '$buyerNumber', '$buyerAddress1', '$buyerAddress2')";		
		           				
		if(mysqli_query($conn, $sql)){         
            echo "<h3>Thank you for your order. We will have it delivered soon! \n\nHere is the information you entered:<br><br></h3>"; 
  
            /*echo nl2br("\nName: $buyerName\n Phone Number: $buyerNumber\n "
                . "Address Line1: $buyerAddress1\n Address Line2: $buyerAddress2 \n\n");*/	
			
			echo "<table border='1'>";
			echo "<tr>";
			echo "<td>". $nameLabel ."</td>";
			echo "<td>". $buyerName ."</td>";			
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>". $numberLabel ."</td>";
			echo "<td>". $buyerNumber ."</td>";			
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>". $add1Label ."</td>";
			echo "<td>". $buyerAddress1 ."</td>";			
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>". $add2Label ."</td>";
			echo "<td>". $buyerAddress2 ."</td>";			
			echo "</tr>";
			
			echo "</table>";
				
			$last_id = mysqli_insert_id($conn);				
			echo "<h3><br><br>If you would like to update any information, please go to <a href='edit.php?id=$last_id' style='color:#799351'>Edit</a> page.</h3>";
         
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
