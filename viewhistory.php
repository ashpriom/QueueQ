<?php session_start(); ?>
<html>
<body>
<?php

include_once "../ticket/ez_sql_core.php";
include_once "../ticket/ez_sql_mysql.php";
$db = new ezSQL_mysql('root','','ticketdb','localhost');

$ticket_id=$_SESSION['ticket_id'];
$varlast=$db->get_var("SELECT ticket_id from ticket ORDER BY ticket_id DESC LIMIT 1");
echo "Details on Ticket ID". "-" ."$varlast";
$user = $db->get_row("SELECT name,email,title,details,ticket_id,dept_name FROM ticket WHERE $varlast=ticket_id");
$db->debug($user);

//$ticket_id=$_SESSION['ticket_id'];
$varlas=$db->get_var("SELECT ticket_id from ticket_history ORDER BY ticket_id DESC");
echo "Conversation history with Ticket ID". "-" ."$varlas"."</br>";
$users = $db->get_results("SELECT message,status FROM ticket_history WHERE $varlas=ticket_id");

foreach($users as $user)
{
    
    echo $user->message;
    echo "</br>";
    echo $user->status;
    echo "</br>";
    echo "</br>";
}
?>
<?php session_destroy(); ?>
</body>
</html>