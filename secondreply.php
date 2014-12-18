<?php session_start(); ?>
<html>
<body>
<?php

include_once "../ticket/ez_sql_core.php";
include_once "../ticket/ez_sql_mysql.php";

$db = new ezSQL_mysql('root', '', 'ticketdb', 'localhost');
//$new_status=$_SESSION['status'];
//$ticket_id = $_SESSION['ticket_id'];
$varreply = $db->get_var("SELECT ticket_id from ticket ORDER BY ticket_id DESC LIMIT 1");
echo "Ticket ID# " . $varreply . "\n";
echo "</br>";
$user = $db->get_row("SELECT status FROM department WHERE $varreply=ticket_id");

?>
<form id="form2" name="form2" method="post" action="secondreplyprocess.php">

  <table width="536" align="center" cellpadding="2" cellspacing="0">
    <tr>
      <th width="256" scope="row">Message:</th>
      <td width="266"><textarea name="message" id="message"></textarea></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><?php

if ($new_status != 'Resolved')
{
?><input name="reply" type="submit" id="reply" value="Reply" /><?php
} else
{
    echo "Ticket status is resolved. So you can't reply anymore. Please send a new query if needed or ";?>
    <a href ='viewhistory.php'><?php echo "View History";?></a>

<?php
}
?>
<a href='showreply.php'><?php

    echo $var;

?></a></td>
    </tr>
  </table>
</form>
</body>
</html>