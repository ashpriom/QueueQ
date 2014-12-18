<?php  session_start(); ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<title>New Ticket</title>

</head>

<body>
<form id="form1" name="form1" method="post" action="ticket.php" >
  <table width="477" border="0" cellspacing="0" cellpadding="2">
    <tr>
      <th width="167" scope="row"> Name:</th>
      <td width="302"><input name="name" type="text" id="name" size="50" maxlength="30" />      </td>
    </tr>
    <tr>
      <th scope="row">E-mail:</th>
      <td><input name="email" type="text" id="email" size="50" maxlength="30" />      </td>
    </tr>
    <tr>
      <th scope="row">Title:</th>
      <td><input name="title" type="text" id="title" size="50" maxlength="30" />      </td>
    </tr>
    <tr>
      <th scope="row">Details:</th>
      <td><textarea name="details" cols="47" rows="4" id="textarea"></textarea>      </td>
    </tr>
    <tr>
      <th scope="row">Department:</th>
      <td><select name="department" id="department">
          <option>Customer Support</option>
          <option>Technical</option>
          <option>Finance/Management</option>
        </select>      </td>
    </tr>
  <td width="267"></td>
  <tr>
    <th scope="row"> </th>
  </tr>
  <td width="484"><p><img src="captcha.php" alt="security code" width="182" height="84" border="1" /></p></td>
  <td><input name="secCode" type="text" class="text" size="40" maxlength="5" /></td>
  <tr>  </tr>
  <tr>
    <td width="484"></td>
  </tr>
  
  <tr>
    <th height="30" scope="row"></th>
    <td><input type="submit" name="Submit" value="Submit"/>    </td>
  </tr>
  </table>
</form>

</body>
</html>