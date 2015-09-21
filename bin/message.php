<?php
/*
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
*/

if(isset($_POST['projectType']) && isset($_POST['email']) && isset($_POST['name'])){
	$to= 'operations@bracketDigital.net';
	$from = htmlspecialchars($_POST['email']);
	$sname = htmlspecialchars($_POST['name']);
	$msg = htmlspecialchars($_POST['projectType']);
	$subject ='Projects';
	$froma= preg_match("/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/", $from);

/**
* 
*/
class Mydb extends Sqlite3
{
	
	function __construct()
	{
		# code...
		$this->open('messages');
	}
}

	$db = new Mydb();

   $sql =<<<TOTO
   INSERT INTO COMPANY (NAME, EMAIL, SUBJECT, MSGBODY) VALUES ($sname, $froma, $subject, $msg);
TOTO;


	$ref = $db->exec($sql);
	
	if(!$ref){
		$db->lastErrorMsg();
		} else {
		echo "Records inserted !!\n";
		}
	$db->close();
}
?>