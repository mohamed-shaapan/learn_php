<?php

	//Connect to server
	$server_address="127.0.0.1";
	$server_connection=ftp_connect($server_address) or die("server not found you idiot");
	
	//User Login
	$user_name="user1";
	$user_password="01129168505Mo";
	$server_login=ftp_login($server_connection, $user_name, $user_password) or die("Un-Fucking Able to Connect");

?>