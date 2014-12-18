<?php session_start(); ?>
<html>
<body>
<?php
include_once "../ticket/ez_sql_core.php";
include_once "../ticket/ez_sql_mysql.php";
$db = new ezSQL_mysql('root','','ticketdb','localhost');

//$new_status=$_SESSION['status'];
$ticket_id=$_SESSION['ticket_id'];
$varshow=$db->get_var("SELECT ticket_id from department ORDER BY ticket_id DESC LIMIT 1");
echo "Reply with Ticket ID". "-" ."$varshow";
$user = $db->get_row("SELECT ticket_id,message,status FROM department WHERE $varshow=ticket_id");
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
      <td>
      <?php if($new_status!='Resolved'){?>
      <form id="form1" name="form1" method="post" action="secondreply.php">
        <input type="submit" name="Submit" value="Reply" />
      </form>
      <?php } else { echo "Ticket status is set to Resolved. You cannot reply";?>
      <a href='viewhistory.php'><?php echo "view history"; }?></a>
      </td>
    </tr>
</table>
<?php

?>
</body>
</html>