<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>

<form id="form1" name="form1" method="post" action="">
  <div align="center">
    <table width="579" height="325" border="1">
      <tr>
        <td>First Name</td>
        <td><label for="name"></label>
        <input type="text" name="name" id="name"   placeholder="your first name"/></td>
      </tr>
      <tr>
        <td>Surname</td>
        <td><label for="surname"></label>
        <input type="text" name="surname" id="surname"   placeholder="surname"/></td>
      </tr>
      <tr>
        <td>Username</td>
        <td><label for="username"></label>
        <input type="text" name="username" id="username"   placeholder="username"/></td>
      </tr>
      <tr>
        <td>Email Address</td>
        <td><label for="email"></label>
        <input type="email" name="email" id="email"  placeholder="email"/></td>
      </tr>
      <tr>
        <td>Cell Number</td>
        <td><label for="cell"></label>
        <input type="text" name="cell" id="cell"  placeholder="cell number"/></td>
      </tr>
      <tr>
        <td>Password</td>
        <td><label for="password"></label>
        <input type="password" name="password" id="password"  placeholder="password"/></td>
      </tr>
      <tr>
        <td>Re-Enter Password</td>
        <td><label for="re_password"></label>
        <input type="password" name="re_password" id="re_password"   placeholder="re-enter your password"/></td>
      </tr>
      <tr>
        <td colspan="2"><div align="center">
          <input type="submit" name="submit" id="submit" value="Submit" />
        </div></td>
      </tr>
    </table>
  </div>
  <div align="center"></div>
</form>
<?php
if(isset($_POST['submit']))
{
	$name=($_REQUEST['name']);
	$surname=($_REQUEST['surname']);
	$username=($_REQUEST['username']);
	$email=($_REQUEST['email']);
	$cell=$_REQUEST['cell'];
	$password=$_REQUEST['password'];
	$re_password=$_REQUEST['re_password'];
	
	if($name && $surname && $username && $email && $cell && $password && $re_password)
	{
		if($password == $re_password)
		{
			$conn=new mysqli("localhost",'mab','mab','users');
			if(!$conn)
			{
				echo "connection failed";	
			}
			$query="INSERT INTO user VALUES('".$name."','".$surname."','".$username."','".$email."','".$cell."','".$password."','". 		            $re_password."')";
			$results=$conn->query($query);
			if(!$results)
			{
		        echo "query failed";
				exit;	
			}
			echo "you have been successfully registered";
		}
		else
		{
			echo "passwords must match";	
		}
	}
	else
	{
		echo "all fields are required";	
	}
}
?>
</body>
</html>