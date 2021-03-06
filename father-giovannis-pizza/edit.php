<!DOCTYPE html>
<html>
  
<head>
    <title>Edit Customer Information</title>
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
<div id="finishOrderDialog1" title="Confirm Order">
      <div id="finalOrderList1">
        <h3 style="margin: 26px;">Your Information:</h3>
        <ol></ol>
      </div>

      <form action="edit_order_connect.php" method="post">      
        <table class="user_info">
          <div id="buyerInfo">
			<input type="hidden" id="buyerID" name="buyerID"  />
            <label> Customer Name: <br> <input type="text" style="width:50%" id="buyerName" name="buyerName"  /> </label>
            <label> Phone Number: <br> <input type="text" style="width:50%" id="buyerNumber" name="buyerNumber"  /> </label>
            <label> Address Line 1: <br> <input type="text" style="width:50%" id="buyerAddress1" name="buyerAddress1"  /> </label>
            <label> Address Line 2: <br> <input type="text" style="width:50%" id="buyerAddress2" name="buyerAddress2"  /> </label>
            <div style= "float: left"><input style= "background-color: #799351; width: 70px; height: 30px; margin: 0; float: left;
    padding: 0;
    font-size: 100%;
    vertical-align: baseline;
    text-decoration: none; float: left;"
	type="submit" value="Update"></div>
          </table>
       </div>
      </form>
    </div>
	
    <center>
<?php
	
	$conn = new mysqli("localhost","root","", "pizza_website");
	if($conn === false){
            die("ERROR: Could not connect. " 
                . mysqli_connect_error());        
	} 
	else {
		$url = $_SERVER['REQUEST_URI'];
		$url_components = parse_url($url);
 
	// Use parse_str() function to parse the
	// string passed via URL
		parse_str($url_components['query'], $params);
		$user_id=$params['id'];
		$sql = "select * from customer_info where id='$user_id'";	
		$result = mysqli_query($conn, $sql);	
		$array = mysqli_fetch_array($result);                          //fetch result     
		
		$buyerName = $array['buyerName'];
		$buyerNumber = $array['buyerNumber'];
		$buyerAddress1 = $array['buyerAddress1'];
		$buyerAddress2 = $array['buyerAddress2'];	

	}
?>

<script>
	document.getElementById("buyerID").setAttribute('value',"<?= $user_id ?>");
 document.getElementById("buyerName").setAttribute('value',"<?= $buyerName ?>");
 document.getElementById("buyerNumber").setAttribute('value',"<?= $buyerNumber ?>");
 document.getElementById("buyerAddress1").setAttribute('value',"<?= $buyerAddress1 ?>");
 document.getElementById("buyerAddress2").setAttribute('value',"<?= $buyerAddress2 ?>");
</script>

</center>
</body>
  
</html>
