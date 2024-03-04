<?php error_reporting(0); 

 $ans=$_POST['no1']+$_POST['no2'];
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="100%" border="0">
    <tr>
      <td width="12%">No 1</td>
      <td width="2%">&nbsp;</td>
      <td width="86%"><input type="text" name="no1" id="textfield" /></td>
    </tr>
    <tr>
      <td>No 2</td>
      <td>&nbsp;</td>
      <td><input type="text" name="no2" id="textfield2" /></td>
    </tr>
    <tr>
      <td>ANS</td>
      <td>&nbsp;</td>
      <td><input type="text" name="ans" id="textfield3" value="<?=$ans?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="ope" id="button" value="ADD" /></td>
    </tr>
  </table>
</form>
</body>
</html>