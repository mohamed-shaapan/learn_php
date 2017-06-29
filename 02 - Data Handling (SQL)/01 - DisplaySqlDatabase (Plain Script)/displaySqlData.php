<?php
	require "connectToDatabase.php";
	//echo "Connected!";
	
	$query="SELECT * FROM customers";
	$query_run=mysql_query($query);
	
	while($query_row=mysql_fetch_assoc($query_run)){
		echo "<hr>";
		$customer_name=$query_row["name"];
		$customer_address=$query_row["address"];
		$customer_city=$query_row["city"];
		$customer_state=$query_row["state"];
		echo $customer_name."||".$customer_address."||".$customer_city."||".$customer_state; 
	}
?>