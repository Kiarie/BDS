<?php
if(isset($_POST['projectType']) && isset($_POST['email']) && isset($_POST['name'])){
	$to= 'operations@bracketDigital.net';
	$from = mysql_real_escape_string($_POST['email']);
	$name = htmlspecialchars($_POST['name']);
	$msg = mysql_real_escape_string($_POST['projectType']);
	$subject ='Projects';
	$from = preg_match(/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/, $from);


	$headers = 'From: '.$from .'/r/n'.
	'Reply-To:'. $from. '/r/n'.
	'X-mailer: PHP/'. phpversion();

	mail($to, $subject, $msg, $headers);

}else{
	die("Wrong format");
}



?>