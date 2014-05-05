<?php
	session_start();
	if(isset($_SESSION["manager"]))
	{
		header("location: index.php");
		exit();
	}
?>

<?php
	//Parse the log in form if the user has filled in and pressed "Log in"
	if(isset($_POST["txtUsername"]) && isset($_POST["txtPassword"]))
	{
		$userName = preg_match('#[^A-Za-z0-9]#i','',$_SESSION["manager"]);
		$password = preg_match('#[^A-Za-z0-9]#i','',$_SESSION["password"]);
		
		
	
	include("../storescripts/connect_to_mysql.php");

	$sql =$mysqli->query("SELECT * FROM admin WHERE username='$userName' AND password='$password' LIMIT 1" );
	//Make sure the person exists in database
	$existCount = mysql_num_rows($sql);
	if($existCount==1)
	{
		while($row = mysql_fetch_array($sql))
		{
			$id=$row["id"];
		}
		$_SESSION["id"]=$id;
		$_SESSION["manager"]=$userName;
		$_SESSION["password"]=$password ;
		
		header("location: index.php");
		exit();
	}else
	{
		echo'that information is incorrect, try again later<a href="admin_login.php">Click here</a>';
	}
	}
	
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Smart Creations</title>
<link rel="stylesheet" href="../Styles/style.css" type="text/css" media="screen"/>


</head>

<body>

	<div id="mainWrapper" align="center" >
	  <?php include_once("../template_header.php");?>
        
        <div id="pageContent">
        	<p>Admin Login Page</p>
            <div align="left" style="margin-left:24px;">
            	<form id="form2" name="form2" method="post" action="">
            	  <table width="200" border="0" align="center">
            	    <tr>
            	      <td width="68">Username:</td>
            	      <td width="116"><label>
            	        <input type="text" name="txtUsername" id="txtUsername" />
          	        </label></td>
          	      </tr>
            	    <tr>
            	      <td>Password:</td>
            	      <td><input type="password" name="txtPassword" id="txtPassword" /></td>
          	      </tr>
            	    <tr>
            	      <td>&nbsp;</td>
            	      <td><div align="right">
            	        <input type="submit" name="logIn" id="logIn" value="Log In" />
          	        </div></td>
          	      </tr>
          	    </table>
       	      </form>
            	<p>&nbsp;</p>
            	<p>&nbsp;</p>
          </div>
      </div>
         
      <?php include_once("../template_footer.php");?>
</div>
    
</body>
</html>