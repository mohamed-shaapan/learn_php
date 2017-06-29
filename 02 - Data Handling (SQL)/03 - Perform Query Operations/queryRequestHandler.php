<?php
	require "connectToDatabase.php";
	
	//02-Get submitted data
	$submitted_user_name=$_POST["user_name"];
	$submitted_user_mail=$_POST["user_mail"];
	$submitted_user_password=$_POST["user_password"];
	//-------------------------------------------------------
	
	if(@$_POST["insert_new_record"]){
		$query="INSERT INTO user_accounts (userName, Email, Password)
		VALUES ('".$submitted_user_name."', '".$submitted_user_mail."', '".$submitted_user_password."')";

		$query_run=mysql_query($query);
		echo "Success!";
	}

	if(@$_POST["update_existing_record"]){
		$query="UPDATE user_accounts
		SET Email='".$submitted_user_mail."', Password='".$submitted_user_password."'
		WHERE userName='".$submitted_user_name."'";

		$query_run=mysql_query($query);
		echo "Success!";
	}
	
	if(@$_POST["remove_existing_record"]){
		$query="DELETE FROM user_accounts
		WHERE userName='".$submitted_user_name."'";

		$query_run=mysql_query($query);
		echo "Success!";
	}
	
	if(@$_POST["get_existing_record"]){
		$query="SELECT * FROM user_accounts
		WHERE userName='".$submitted_user_name."'";

		$query_run=mysql_query($query);
		
		$result=mysql_fetch_assoc($query_run);
		$obtained_email=$result["Email"];
		$obtained_password=$result["Password"];
		
		//echo "Success!";
		echo "<br>User Name : ".$submitted_user_name;
		echo "<br>Email : ".$obtained_email;
		echo "<br>Password : ".$obtained_password;
	}
	
	
?>