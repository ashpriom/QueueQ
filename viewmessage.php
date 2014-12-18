<?php session_start(); ?>
<html>
<body>
<?php 


	// Include ezSQL core
	include_once "../ticket/ez_sql_core.php";

	// Include ezSQL database specific component
	include_once "../ticket/ez_sql_mysql.php";

	// Initialise database object and establish a connection
	// at the same time - db_user / db_password / db_name / db_host
	$db = new ezSQL_mysql('root','','ticketdb','localhost');

// Select multiple records from the database and print them out..

//$ticket_id=$_SESSION['ticket_id']
$var=$db->get_var("SELECT ticket_id FROM ticket ORDER BY ticket_id DESC LIMIT 1");
echo "Details on Ticket ID". "-" ."$var";
$user = $db->get_row("SELECT name,email,title,details,ticket_id,dept_name FROM ticket WHERE $var=ticket_id");
$db->debug($user);
?>


<form id="form1" name="form2" method="post" action="rbsform.php">
      <input type="submit" name="Submit" value="Reply" />
    </form>
    

</body>
</html>