<?php
session_start();
	$display="";
	
	if(isset($_POST['username']) && isset($_POST['password']))
	{
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	if($username&&$password)
	{
		// calling the database connection
		  require("scripts/conn.class.php");
		  $obj = new conn();
		  $obj->con();
		//Selecting the username from the database which is an email
		$query = mysql_query("SELECT * FROM user WHERE username='$username'");
		$rows = mysql_num_rows($query);
		
			if($rows)
					{
						
						while($row = mysql_fetch_assoc($query))
						{
							$dbusername= $row['username'];
							$dbpassword= $row['password'];
							
						}
					
					 if($username==$dbusername && $password==$dbpassword)
					 {
						// "You're successfully loged in ! <a href='memberpage.php' >Click here to continue <a/>";
						$_SESSION['admin']=1;
						$_SESSION['username']=$username;
						header("Location: logd.php");
						
					 }
					 else
						{
						   $display= "Incorrect password !";
						   print $display;
						}
			}
			else
			{
				$display="User does not exist!";
				print $display;	
			}
		
		
		}else
	print "all fields need to be filled";
	}
	
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>mkhari computers</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<style type="text/css">
.fff {	color: #808080;
}
.giddy {	color: #000040;
}
#adbox #links #form1 div table tr td div p {
	color: #F00;
}
#adbox #links #form1 div table tr td div p {
	color: #FFF;
}
.fff {
	color: #FFF;
}
.ggg {
	color: #FFF;
}
#adbox #form1 div table tr td p .ggg {
	color: #F00;
}
</style>
</head>
<body>
	<div id="header">
		<div class="wrapper clearfix">
			<div id="logo"></div>
			<ul id="navigation">
				<li>
					<a href="index.php">HOME</a>
			  </li>
				<li>
					<a href="register.php.">REGISTER</a>
				</li>
                <li class="selected">
					<a href="login.php">LOGIN</a>
				</li>
				<li>
					<a href="aboutus.php">ABOUT US</a>
				</li>
                <li>
					<a href="contactus.php">CONTACT US</a>
				</li>
				<li></li>
			</ul>
		</div>
	</div>
	<div id="contents">
<div id="adbox" >
		  <div class="wrapper clearfix">
		    <div align="left"><img src="images/comph.jpg"  align="right"alt="Img" height="352" width="569">
	        </div>
		    <div class="info">
            
	          <h1>Mkhari computer Components</h1>
              <h3 class="giddy"> <span class="fff">We can provide you with components such as follows:hard drives, mother board, mouse, keyboard,ram,processor,computer case,monitor,usb,sound cards,fan,IDE  and SATTA cables,CD  and DVD writers</span></h3>
              <h1 align="left">&nbsp;</h1>
					
			</div>
</div>
			<div class="highlight">
				<h2 align="center">LOGIN</h2>
                
			</div>
            <form action="" method="post" name="form1" class="form-horizontal" id="form1">
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
        <td align="center" colspan="2">
          <p align="center">
            <input type="submit" name="login" id="login" value="login"  />
          </p>
          <p align="center"><span class="ggg">forgot password? click</span> <a href="forgot.php">here</a></p>
          <p align="center"><span class="fff">login as administrator click</span> <a href="admin.login.php">here</a></p>
       </td>
      </tr>
    </table>
  </div>
</form>

</div>
</body> 
</html>