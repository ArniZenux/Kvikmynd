<?php
	if(isset($_POST['addImg'])){
		$title 		= $_POST['Title'];
		$actor 		= $_POST['Actor'];
		$year 		= $_POST['Year'];
		$director 	= $_POST['Director'];
		$subtitle 	= $_POST['Subtitle'];
		$tegund 	= $_POST['Tegund'];
		$info = getimagesize($_FILES['image']['tmp_name']); 
		
		if($info==FALSE){
			echo 'Vantar mynd' ; 
	  	}
	
		else{
			echo ' Tad tokst '; 
			$image = addslashes($_FILES['image']['tmp_name']);
			$name  = addslashes($_FILES['image']['name']);
			$image = file_get_contents($image);
			$image = base64_encode($image);
			$sqlString = "INSERT INTO tblbiomynd(Title, Actor, Director, Year, Subtitle, Tegund, Name, Image) VALUES('$title','$actor','$director','$year','$subtitle','$tegund','$name','$image'); ";
				if($con->query($sqlString) === TRUE ){
					echo "Skraning";
				}
				else{
					echo "Skraning er bilud";
				}
		}
	}	
?>