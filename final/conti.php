<?php
if(isset($_POST['submit']))
{
	$name=($_REQUEST['name']);
	$surname=($_REQUEST['surname']);
	$email=($_REQUEST['email']);
	$cell=$_REQUEST['cell'];
	$comments=$_REQUEST['comments'];
	
	if($name && $surname && $email && $cell && $comments)
	{
			$conn=new mysqli("localhost",'mab','mab','afric');
			if(!$conn)
			{
				echo "connection failed";	
			}
	$query="INSERT INTO contact VALUES(null,'".$name."','".$surname."','".$username."','".$email."','".$cell."','".$comments."')";
			$results=$conn->query($query);
			if(!$results)
			{
		        echo "query failed";
				exit;	
			}
			
			echo "data sent";						
	}
	else
	{
		echo "all fields are required";	
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>contact afric</title>
</head>

<body  bgcolor="#FFFFCC">
<form id="form1" name="form1" method="post" action="">
<table width="873" height="600" border="2">
  <tr>
    <td width="863" height="600"><table width="1003" height="212" border="1">
      <tr>
        <td width="993" height="208">&nbsp;</td>
      </tr>
    </table>
      <table width="1001" height="58" border="1">
        <tr>
          <td width="855" height="52"><h2><a href="index.php"> home</a> <a href="abouut.php">about</a> <a href="study.php">study</a> <a href="appl.php">apply</a>&nbsp;</h2></td>
        </tr>
      </table>

<table width="1001" height="430" border="1">
  <tr>
    <td width="136"><h3 align="center">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="714"><h1>Contact Afric for more information</h1>
      <h2>
Feel free to submit your information to our database so you can know much abot us
<table width="720" height="467" border="5"  bgcolor="#FFFFCC">
  <tr>
    <td width="109">First Name</td>
    <td width="574"><label for="name"></label>
      <input type="text" name="name" id="name" /></td>
  </tr>
  <tr>
    <td>Surname</td>
    <td><input type="text" name="surname" id="surname" /></td>
  </tr>
  <tr>
    <td>Email</td>
    <td><label for="email"></label>
      <input type="text" name="email" id="email" /></td>
  </tr>
  <tr>
    <td>Cell</td>
    <td><label for="cell"></label>
      <input type="text" name="cell" id="cell" /></td>
  </tr>
  <tr>
    <td>Comments</td>
    <td><label for="comments"></label>
      <textarea name="comments" id="comments" cols="45" rows="5"></textarea></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="submit" id="submit" value="Submit" />
      <input type="reset" name="clear" id="clear" value="resset" />
    </div></td>
  </tr>
</table></td>
    <td width="129">&nbsp;</td>
  </tr>
</table>

<p align="center">Copyright © 2014 Afric Policing Institute. All Rights Reserved</p>
</form>

</body>
</html>