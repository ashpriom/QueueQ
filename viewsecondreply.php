<?php session_start(); ?>
<html>
<body>
<?php
include_once "../ticket/ez_sql_core.php";
include_once "../ticket/ez_sql_mysql.php";
$db = new ezSQL_mysql('root','','ticketdb','localhost');


$ticket_id=$_SESSION['ticket_id'];
$variation=$db->get_var("SELECT ticket_id from users ORDER BY ticket_id DESC");
echo "Reply with Ticket ID". "-" ."$variation";
$user = $db->get_row("SELECT message FROM users WHERE $variation=ticket_id" );
$db->debug($user);



?>
<table width="536" border="0" cellspacing="0" cellpadding="2">
    <tr>
      <th width="256" scope="row"></th>
      <td> <?php //echo $user->message; ?>	  </td>
    </tr>
    <tr>
      <th scope="row"></th>
      <td><?php //echo $user->status; ?> </td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><form id="form1" name="form1" method="post" action="rbsform.php">
        <input type="submit" name="Submit" value="Reply" />
      </form>
      </td>
    </tr>
</table>
<?php 
?>
</body>
</html>