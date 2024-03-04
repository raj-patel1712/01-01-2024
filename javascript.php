<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script>
function alertmsg()
{
	//document.write('hi');
	//alert("hi");
	//var i=confirm("Do you want tot delete this record?");
	//var i=prompt("Enter The No","20");
	//alert(i);
	document.getElementById('no1').style.border="";
	document.getElementById('no2').style.border="";
	
	document.getElementById('err1').innerHTML="";
	document.getElementById('err2').innerHTML="";
	
	var no1=document.getElementById('no1').value;
	var no2=document.getElementById('no2').value;
	
	if(no1=="")
	{
		document.getElementById('no1').style.border="solid 1px red";
		document.getElementById('err1').innerHTML="Enter No 1";
	}
	else if(no2=="")
	{
		document.getElementById('no2').style.border="solid 1px red";
		document.getElementById('err2').innerHTML="Enter No 2";
	}
	else
	{
		var ans=parseInt(no1)+parseInt(no2);
	
		document.getElementById('ans').value=ans;
	}
	
}
</script>
</head>

<body>

<table width="100%" border="0">
  <tr>
    <td width="10%">No 1</td>
    <td width="2%">&nbsp;</td>
    <td width="88%">
    <input type="text" name="textfield" id="no1" /><label id="err1" style="color:red;"></label></td>
  </tr>
  <tr>
    <td>No 2</td>
    <td>&nbsp;</td>
    <td>
    <input type="text" name="textfield2" id="no2" /><label id="err2" style="color:red"></label></td>
  </tr>
  <tr>
    <td>ANS</td>
    <td>&nbsp;</td>
    <td>
    <input type="text" name="textfield3" id="ans" /></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><input type="button" name="button" id="button" value="Submit" onclick="alertmsg()" /></td>
  </tr>
</table>

</body>
</html>