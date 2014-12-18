<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="replyprocess.php">

  <table width="536" border="1" cellspacing="0" cellpadding="2">
    <tr>
      <th width="256" scope="row">Message:</th>
      <td width="266"><textarea name="message" id="message"></textarea></td>
    </tr>
    <tr>
      <th scope="row">Status:</th>
      <td><select name="status" id="status">
        <option>Invalid</option>
        <option>Fixed</option>
        <option>Resolved</option>
      </select>
      </td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td><input name="reply" type="submit" id="reply" value="Submit" /></td>
    </tr>
  </table>

</form>

</body>
</html>
