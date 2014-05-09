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
			$query="INSERT INTO admin VALUES('".$name."','".$surname."','".$username."','".$email."','".$cell."','".$password."','". 		            $re_password."')";
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
?><!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
<style type="text/css">
.fff {	color: #808080;
}
.giddy {	color: #000040;
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
					<a href="gallery.php">GALLERY</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
<div id="adbox" >
		  <div class="wrapper clearfix">
          <img src="images/comph.jpg"  align="right"alt="Img" height="352" width="567">
		    <div class="info">
            
<h1>Mkhari computer Components</h1>
<h3 class="giddy"> <span class="fff">We can provide you with components such as follows:hard drives, mother board, mouse, keyboard,ram,processor,computer case,monitor,usb,sound cards,fan,IDE  and SATTA cables,CD  and DVD writers</span></h3>
<h1>.
</h1>
					
			</div>
         </div>
			<div class="highlight">
				<h2 align="center">Admin REGISTER</h2>
                </div>
			<form id="form1" name="form1" method="post" action="" >
  <div align="center">
    <table width="579" height="325" border="1" align="center">
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
</form>

    </div>
	 
</body> 
</html>