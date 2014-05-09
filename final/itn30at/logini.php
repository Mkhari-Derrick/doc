<?php
if(isset($_POST['submit']))
{
	if(empty($_POST)=== false){
	$username=$_REQUEST['username'];
	$password=$_REQUEST['password'];
	
	if(empty($username) === true || empty($password) === true){
		echo "you need to enter a username and password";
		}else if(user_exists($username) === false){
			echo "we can't find the user name you specifeid";
		}
		
$conn = mysqli_connect('localhost','mab','mab','users');
if (empty($conn)) {
die("mysqli_connect failed: " . mysqli_connect_error());
}
$sql ="SELECT * FROM user WHERE username='".$_SESSION['username']."'";
$results=$conn->query($sql);
			if(empty($results))
			{
		        echo "wrong infor";
				exit;	
	
			}else
			{
				echo"you are now loged in";
			}
	}
}
?>
<?php

session_start();
	$msg ="";
	
	if(isset($_POST['forgot']))
	{
		header("Location: forgot.php");	
	}
	
	
	if(isset($_POST['login']))
	{
		$username=trim($_POST['username']);
		$password=trim($_POST['pass']);
		
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
			mysql_select_db("developement") or die("couldn't find table");
		
			
				$query = mysql_query("SELECT * FROM developer WHERE USERNAME='$username'");
				$rows = mysql_num_rows($query);
				
					if($rows!=0)
					{
						while($row = mysql_fetch_assoc($query))
						{
							$dbusername= $row['USERNAME'];
							$dbpassword= $row['PASSWORD'];
						}
						
						 if($username==$dbusername && $password==$dbpassword)
						 {
							 $_SESSION['admin']=1;
							$_SESSION['username']=$username;
							
							if($dbusername == $username)
							{
								header("Location: page0.php");
							}
							
						 }
						
					}
					else
					{
						$msg ="User does not exist!";
					
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
          <img src="images/comph.jpg"  align="right"alt="Img" height="352" width="238">
		    <div class="info">
            
	    <h1>Sonsectetur adipiscing elit.</h1>
					<p>
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
          <input type="submit" name="submit" id="submit" value="Submit"  />
        </div></td>
      </tr>
    </table>
  </div>
</form>

    </div>
</div>
</body> 
</html>