<?php session_start(); ?>
<html>
<title>Reply</title>
<body>
<?php
include_once "../ticket/ez_sql_core.php";
include_once "../ticket/ez_sql_mysql.php";
$db = new ezSQL_mysql('root','','ticketdb','localhost');

$message = $_POST['message'];
$status = $_POST['status'];
$ticket_id=$_SESSION['ticket_id'];

$varprocess=$db->get_var("SELECT ticket_id from ticket ORDER BY ticket_id DESC LIMIT 1");
$ticket_id=$varprocess;
$new_message=$_POST["message"];
$status=$_POST["NULL"];
$table = mysql_query("SELECT * from ticketdb");
$db->query("INSERT INTO users VALUES ('$ticket_id','$new_message','$status')");


//insert into ticket_history
$db->query("INSERT INTO ticket_history VALUES ('$ticket_id','$new_message','$status')");

//mail
//$replytoclient = "Dear". $new_name.","."\n". "There is a reply to your ticket ID #". $_SESSION['ticket_id']". Please click on the following link to see it:"."\n". <a href="showreply.php">reply</a> ."\n"."Thank You."."\n"."Support Desk | RBS"."\n"."info@rightbrainsolution.com";


//sendmail


echo "Your reply was sent successfully! You will be notified if the client replies.";
?>
<a href='viewsecondreply.php'><?php echo $varprocess; ?></a>
</body>
</html>