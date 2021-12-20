<!DOCTYPE html>
<html>
  
<head>
    <title>Update Customer Information</title>
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
            echo "<h3>$buyerName, your information is updated successfully! Your order will reach you soon!</h3>"; 
  
         
		} else{
            echo "ERROR: " 
                . mysqli_error($conn);
        }	
				
		$conn->close();
	}
?>
<br>
<img src="https://i.gifer.com/origin/ee/eeae78632ad8c27c1a774126bb161e79.gif" /> 
</center>
</body>
  
</html>
