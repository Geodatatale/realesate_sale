<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $mailFrom = $_POST['email'];
    $phoneFrom = $_POST['phone'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$mailTo = "www.geoffreyasira95@gmail.com";
	$headers = "From: ".$mailFrom;
	$txt = "You have recieved an e-mail from www.geoffreyasira95@gmail.com \n\n sent by: ".$name.".\n phone: ".$phoneFrom.".\n subject: ".$subject.".    \n\n".$message;


	mail($mailTo, $subject, $txt, $headers);
	header("Location: message.html");
}