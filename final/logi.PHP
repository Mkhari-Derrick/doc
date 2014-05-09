<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form action="" method="post" name="form1" class="form-horizontal" id="form1">
  <div align="center">
    <table width="300" height="193" border="1">
      <tr>
        <td>username</td>
        <td><label for="username"></label>
        <input type="text" name="username" id="username" placeholder="username"/></td>
      </tr>
      <tr>
        <td>password</td>
        <td><label for="password"></label>
        <input type="password" name="password" id="password"  placeholder="password"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="submit" id="submit" value="Submit"  />
        </div></td>
      </tr>
    </table>
  </div>
</form>
<?php
if(isset($_POST['submit']))
{
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	if(!$username || !$password)
	{
		echo "fill all the fields";
		exit;	
	}
	$conn=new mysqli("localhost",'mab','mab','users');
	 $conn = mysql_pconnect('localhost','mab','mab');
  if(!$conn)
  {
	echo'connection to mysql database failed';
	exit;  
  }
  $db = mysql_select_db('users');
  if(!$db)
  {
	 echo'datbase selection failed';
	 exit;  
  }
  else
  {
	echo"connected";  
  }
  /*
  $query = "select * from user where username='".$username."' and password='".$password."'";
  $result = mysql_query($query);
  if(!$result)
  {
	echo'query submission failed';
	exit;  
  }*/
  
  
 }
?>
</body>
</html>