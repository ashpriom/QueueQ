<?php session_start(); ?>
<?php ob_start(); ?>

<html>
<body>


<?php
include "dbconnect.php";
include "opendb.php";
include_once "../ticket/ez_sql_core.php";
include_once "../ticket/ez_sql_mysql.php";
$db = new ezSQL_mysql('root','','ticketdb','localhost');


//validation

require_once "formvalidator.php";




$show_form=true;
$flag_form=0;
if(isset($_POST['Submit']))
{
    $validator = new FormValidator();
    $validator->addValidation("name","req","Please fill in Name");
    $validator->addValidation("email","email","The input for Email should be a valid email value");
    $validator->addValidation("email","req","Please fill in Email");
	if($validator->ValidateForm())
	{ 
	$show_form=false;
	$flag_form=1;
	}
	
else
	{    
	$flag_form=0;
	echo "<B>Validation Errors:</B>";

    $error_hash = $validator->GetErrors();
    foreach($error_hash as $inpname => $inp_err)
        {
        echo "<p>$inpname : $inp_err</p>\n";
        }
	}
}		
//validationends			

//captcha	
if (isset($_POST['Submit']))
			{
      		$secCode = isset($_POST['secCode']) ? strtolower($_POST['secCode']) : "";
      		if ($secCode == $_SESSION['securityCode']) 
				{
         		unset($_SESSION['securityCode']);
         		$result = true;
     			}
    		else 
				{
     			echo "<p>Sorry the security code is invalid! Please try it again!</p>";
     			$result = false;
				
        		}
 			}

//if captcha & validation both r correct
if($flag_form==1 && $result==true)
{
//POST form element values
//$ticket_id=rand()%10000+1;
//$ticketvar=$db->get_var("select ticket_id FROM ticket");

$name = $_POST['name'];
$email = $_POST['email'];
$title = $_POST['title'];
$details = $_POST['details'];
$department = $_POST['department'];
if($department == 1){
$department = 'Customer Support';
}
elseif($department == 2){
$department = 'Technical';
}
elseif($department == 3){
$department = 'Finance/Management';
}

//select db
mysql_select_db("ticketdb");
$new_name=$_POST["name"];
$new_email=$_POST["email"];
$new_title=$_POST["title"];
$new_details=$_POST["details"];
$new_department=$_POST["department"];

$table = mysql_query("SELECT * FROM ticketdb");
mysql_query("INSERT INTO ticket VALUES ('$ticket_id' ,'$new_name','$new_email','$new_title','$new_details','$new_department')");

echo "Your message was successfully posted, check your e-mail for details. Your Ticket id is";
$var=$db->get_var("SELECT ticket_id FROM ticket ORDER BY ticket_id DESC LIMIT 1"); ?>
 
<a href='viewmessage.php'><?php echo $var;  }?></a>

<?php

//header("Location: viewmessage.php");
 
/*$mailtoclient = "Dear".$new_name.", Thank you for contacting us. We have received your support request ID#".$ticket_id.". We have assigned it to the right person and we should be responding back to you as soon as possible";
//$mailtorbs = "A new ticket has been submitted in the". $new_department." and needs your attention. The ticket number is ID #".$ticket_id". Click on the following link to see the details."."\n".echo <a href="viewmessage.php">Ticket</a>."\n"."Thanks"."\n"."The Support Bot"; 



//$headers = 'MIME-Version= 1.0' . "\r\n";
//$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
//$headers .= 'From: info@rightbrainsolution.com' . "\r\n";



//mail($new_email,$new_title,$mailtoclient,$headers);
//mail($new_email,$new_title,$mailtorbs,$headers);
 
//echo "Your message was successfully posted. An e-mail has been sent to you with your ticket ID";
*/
?>
<?php ob_flush(); ?>
</body>
</html>