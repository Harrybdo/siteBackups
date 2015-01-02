<?php

if(isset($_POST["name"])) {
  
  echo "hey!";
	$name = $_POST["name"];
	$email = $_POST["email"];
	$message = $_POST["message"];

	$to = "braindomailform@gmail.com";
	$subject = "brain.do Form: $name";
	$msg = "$message";    
	$headers = "From: <$email>";

	mail($to,$subject,$msg,$headers);
	
} else {
  
}

?>
