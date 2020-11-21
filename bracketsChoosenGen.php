<?php
if (isset($_POST['submit'])) {
	$name = $_POST['username'];
	$mailfrom = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['msg'];


	$mailTo = "aernestnjuki@gmail.com";
	$headers = "From: ".$mailfrom;
	$txt = "You have recieved an email from ".$name.".\n\n".$message;


	mail($mailTo, $subject, $txt, $headers);
	header("Location: bracketsChoosenGen.html?mailsend"); 
}

?>