<?php
session_start();
	$msg ="";
	/*if(isset($_POST['forgot']))
	{
		header("Location: forgot.php");	
	}*/
	
	
	//if(isset($_POST['login']))
	if(isset($_POST['username']) && isset($_POST['password']))
	{
		$username=trim($_POST['username']);
		$password=trim($_POST['password']);
		
		$_SESSION['username'] = $username;	
		if(!$username )
		{
			$msg ="Username is required, please fill it in <br/>";
			
			}
		if( !$password )
			{
				$msg ="Password is required, please fill it in <br/>";	
			}
		if(!$username && !$password )
		{
			$msg ="All field are required, please fill them <br/>";
			
			}	
		if($username&&$password)
		{
			
			$connect=mysql_connect("Localhost","root","") or die ("Couldn't Connect");
			mysql_select_db("users") or die("couldn't find table");
		
			
				$query = mysql_query("SELECT * FROM user WHERE username='$username'");
				$rows = mysql_num_rows($query);
					if($rows!=0)
					{
						while($row = mysql_fetch_assoc($query))
						{
							$dbusername= $row['username'];
							$dbpassword= $row['password'];
						}
						
						 if($username==$dbusername && $password==$dbpassword)
						 {
							 $_SESSION['admin']=1;
							$_SESSION['username']=$username;
							
							if($dbusername == $username)
							{
								
								header("Location: register.php");
							}else
							{
								$msg ="User does not exist!";
								print $msg;
							}
							
						 }
						
					}
					else
					{
						$msg ="User does not exist!";
						print $msg;
					}	
			
			}
			
			
		
	}
?>
<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="wrapper clearfix">
			<div id="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
			</div>
			<ul id="navigation">
				<li class="selected">
					<a href="index.php">HOME</a>
			  </li>
				<li>
					<a href="register.php.">REGISTER</a>
				</li>
                <li>
					<a href="login.php">LOGIN</a>
				</li>
				<li>
					<a href="aboutus.php">ABOUT US</a>
				</li>
                <li>
					<a href="contactus.php">CONTACT US</a>
				</li>
				<li>
					<a href="gallery.html">GALLERY</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
<div id="adbox" >
		  <div class="wrapper clearfix">
		    <div align="left"><img src="images/comph.jpg"  align="right"alt="Img" height="352" width="238">
	        </div>
		    <div class="info">
            
	    <h1 align="left">Sonsectetur adipiscing elit.</h1>
					<p align="left">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris vitae quam et tortor consequat porta. Sed faucibus, ligula quis mollis lobortis, diam felis tempus enim, a vestibulum eros quam ac magna. Vestibulum varius porttitor elit, et vulputate odio egestas sit amet.
					</p>
					
			</div>
  </div>
			<div class="highlight">
				<h2 align="center">LOGIN</h2>
                
			</div><div align="center" id="links"><form action="" method="post" name="form1" class="form-horizontal" id="form1">
  <div align="center">
    <table width="300" height="193" border="1" align="center">
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
          <input type="submit" name="login" id="login" value="login"  />
        </div></td>
      </tr>
    </table>
  </div>
</form>

    </div>
</div>
</body> 
</html>