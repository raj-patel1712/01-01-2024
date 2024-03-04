<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form action="post_vali.php" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="100%" border="1">
    <tr>
      <td width="17%">Name</td>
      <td width="1%">&nbsp;</td>
      <td width="82%"><input type="text" name="name" id="textfield" /></td>
    </tr>
    <tr>
      <td>Address</td>
      <td>&nbsp;</td>
      <td><textarea name="address" id="textarea" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td>City</td>
      <td>&nbsp;</td>
      <td><select name="city" id="select">
      <option value="AHM">Ahmedabad</option>
      <option value="BRD">Baroda</option>
      <option value="MSN">Mahesana</option>
      </select></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>&nbsp;</td>
      <td><input type="radio" name="gender" id="radio" value="Male" />
      Male 
        <input type="radio" name="gender" id="radio2" value="Female" />
      Female</td>
    </tr>
    <tr>
      <td>Hobby</td>
      <td>&nbsp;</td>
      <td><input type="checkbox" name="hobby[]" id="checkbox" value="Music" />
      Music 
        <input type="checkbox" name="hobby[]" id="checkbox2" value="Reading" />
      Reading 
      <input type="checkbox" name="hobby[]" id="checkbox3" value="Sports" />
      Sports</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><select name="select2" id="select2">
      <?php for($i=1985;$i<=2024;$i++) { ?>
      <option value=""><?php echo $i; ?></option>
      <?php } ?>
      </select></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td><input type="submit" name="button" id="button" value="Submit" /></td>
    </tr>
  </table>
</form>
</body>
</html>