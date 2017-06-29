<?php
	
	//01-Attempt Connection
	require "serverConnect.php";
	echo "Server Connection Successfull!<br>";
	
	/*BIG NOTE
					"The New Relocation Folder Must Be Created Beforehand"
	*/
	
	//Attempt to relocate file
	$old_dir="Volkswagen.jpg";
	$new_dir="Cars/Volkswagen.jpg";
	$relocation_attempt=@ftp_rename($server_connection, $old_dir, $new_dir);
	
	if($relocation_attempt){
		echo "File Relocation Successfull!<br>";
	}else{
		echo "File Relocation Failed??????????<br>";
	}

	//Dont Forget to close connection
	ftp_close($server_connection);
	echo "Server Connection Closed";

?>