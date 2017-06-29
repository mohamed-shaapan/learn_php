<?php
	if(isset($_FILES['file'])){
		$name=$_FILES["file"]["name"];
		$tmp_location=$_FILES["file"]["tmp_name"];
			
		if(isset($name)){
			if(!empty($name)){
				$new_location="Uploads/";
				if(move_uploaded_file($tmp_location, $new_location.$name)){
					echo "Upload Success";
				}
			}
		}
	}
?>	
	






	

	
	
