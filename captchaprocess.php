<?php session_start(); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include 'dbconnect.php';
include 'opendb.php';

require_once "formvalidator.php";
$show_form=true;
if(isset($_POST['SubmitBtn']))
{
    $validator = new FormValidator();
    $validator->addValidation("name","req","Please fill in Name");
    $validator->addValidation("email","email","The input for Email should be a valid email value");
    $validator->addValidation("email","req","Please fill in Email");
	if($validator->ValidateForm())
	{ 
	$show_form=false;
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
	?>
	<form id="form1" name="form1" method="post" action="ticket.php" onsubmit ="ticket.php">
<table>
<td width="484">
	<p><img src="captcha.php" alt="security code" width="482" height="171" border="1" /></p>
	<p> Enter CAPTCHA code in the box:
	  <input name="secCode" type="text" class="text" size="40" maxlength="5" />
	  </p></td>
	
	
	<tr>
	<td width="484">
	<input type="submit" name="SubmitBtn" value="Submit"/>
    </td>
	</tr>
</table>	
</form>
	

<!--<form id="form1" name="form1" method="post" action="ticket.php" onsubmit ="ticket.php">
<table>
<td width="647">
	<p><img src="captcha.php" alt="security code" width="482" height="171" border="1" /></p>
	<p> Enter CAPTCHA code in the box:
	  <input name="secCode" type="text" class="text" size="40" maxlength="5" />
	  </p></td>
	
	
	<tr>
	<td width="647">
	<input type="submit" name="SubmitBtn" value="Submit"/>
    </td>
	</tr>
</table>	
</form>-->
	
<?php
}
else
	{    
	
	echo "<B>Validation Errors:</B>";

    $error_hash = $validator->GetErrors();
    foreach($error_hash as $inpname => $inp_err)
        {
        echo "<p>$inpname : $inp_err</p>\n";
        }?>
	<form id="form1" name="form1" method="post" action="captchaprocess.php" onsubmit ="ticket.php" >
  <table width="477" border="0" cellspacing="0" cellpadding="2">
    <tr>
      <th width="167" scope="row"> Name:</th>
      <td width="302"><input name="name" type="text" id="name" size="50" maxlength="30" />
      </td>
    </tr>
    <tr>
      <th scope="row">E-mail:</th>
      <td><input name="email" type="text" id="email" size="50" maxlength="30" />
      </td>
    </tr>
    <tr>
      <th scope="row">Title:</th>
      <td><input name="title" type="text" id="title" size="50" maxlength="30" />
      </td>
    </tr>
    <tr>
      <th scope="row">Details:</th>
      <td><textarea name="details" cols="47" rows="4" id="textarea"></textarea>
      </td>
    </tr>
    <tr>
      <th scope="row">Department:</th>
      <td><select name="department" id="department">
          <option>Customer Support</option>
          <option>Technical</option>
          <option>Finance/Management</option>
        </select>
      </td>
    </tr>
    
  <td width="267"></td>
  <tr>
    <th scope="row"> </th>
    
  </tr>
  
  
  <tr>
    <th height="30" scope="row"></th>
    <td><input type="submit" name="SubmitBtn" value="Submit"/>
    </td>
  </tr>
  </table>
</form>
	
<?php		
	}	        
}
?>	
</body>
</html>