<?php
	require "connectToDatabase.php";
	//echo "Connected!"
	
	
	if(@$_POST["sign_in"]){
		echo "Not Ready Yet!!!";		
	}
	
	if(@$_POST["sign_up"]){
		$new_user_mail=$_POST["user_mail"];
		$new_user_password=$_POST["user_password"];

		$query="INSERT INTO user_accounts (Email, Password)
		VALUES ('".$new_user_mail."', '".$new_user_password."')";

		$query_run=mysql_query($query);
	}
?>