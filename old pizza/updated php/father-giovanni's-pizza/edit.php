<!DOCTYPE html>
<html>
  
<head>
    <title>Edit Customer Information</title>
</head>
  
<body>

<div id="finishOrderDialog1" title="Confirm Order">
      <div id="finalOrderList1">
        <h3>Your Information:</h3>
        <ol></ol>
      </div>

      <form action="edit_order_connect.php" method="post">      
        <table class="user_info">
          <div id="buyerInfo">
			<input type="hidden" id="buyerID" name="buyerID"  />
            <input type="text" id="buyerName" name="buyerName"  />
            <input type="text" id="buyerNumber" name="buyerNumber"  />
            <input type="text" id="buyerAddress1" name="buyerAddress1"  />
            <input type="text" id="buyerAddress2" name="buyerAddress2"  />
            <input type="submit" value="Update">
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
