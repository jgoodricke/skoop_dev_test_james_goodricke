<HTML XMLns="http://www.w3.org/1999/xHTML">
<?php
	//Check user is logged in
	include "login-check.php";
?>
<head>
	<title>Past Orders</title>
</head>
<body>
<h1>Past Orders</h1>
	<?php
		//Database Credentials
		$serverName  = "localhost";
		$dbName = "skoop";
		$dbUsername = "root";
		$dbPassword = "";
		$dbTableName = "orders";
		
		//This message is displayed to the user if there's an error with the database query.
		$errorMessage = "<p>Something went wrong connecting to the server. Please try refreshing the page, or contact your system administrator.</p>";
		
		// Create connection
		$conn = new mysqli($serverName, $dbUsername, $dbPassword, $dbName);
		//If connection error, notify the user.
		if ($conn->connect_error) {
			echo $errorMessage;
		}
		//If no connection error, fetch and display data.
		else{
			/*
			echo"<table>
			<tr>
			<th>Order Date</th>
			<th>Number</th>
			<th>Contact Details</th>
			<th>Shipping Status</th>
			<th>Order Details</th>
			</tr>";
			//Query to be sent to Server
			$statement = "SELECT id, number,  FROM ".$dbTableName." WHERE email = ?";
			
			`id`, `order_id`, `product_code`, `name`, `email`, `mobile`, `address_line_one`, `address_line_two`, `suburb`, `state`, `postcode`, `country`, `status`;
				
			//Prepare Query
			if($query = $conn->prepare($statement)){
				$query->bind_param('s', $email);
				
				//Execute Query
				$query->execute();
			}*/
		}
		

		
	?>
	</table>
</body>