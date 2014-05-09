<?php
if(isset($_POST['submit']))
{
	$name=($_POST['name']);
	$subject=($_POST['subject']);
	$email=($_POST['email']);
	$message=($_POST['message']);

	
	if($name && $subject && $email && $message)
	{
	
			if(preg_match("/^[a-zA-Z0-9\_\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\_]+$/",$email))
						{
			$conn=new mysqli("localhost",'mab','mab','users');
			if(!$conn)
			{
				echo "connection failed";	
			}
			$query="INSERT INTO contact VALUES('".$name."','".$subject."','".$email."','".$message."')";
			$results=$conn->query($query);
			if(!$results)
			{
		        echo "query failed";
				exit;	
			}
			echo "submitted";
			}else
			{
			echo "email format is invalid";	
			}
	}else
	{
		echo "all fields are required  <a href='contactus.php'>Click Here</a>";	
		exit;
	}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - mkhari tech</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
  <div id="header">
		<div class="wrapper clearfix">
			<div id="logo"></div>
			<ul id="navigation">
				<li >
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
                <li class="selected">
					<a href="contactus.php">CONTACT US</a>
			  </li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="contact" class="wrapper clearfix">
			<div id="sidebar">
				<ul>
					<li>
						<a href="blog.html"><img src="images/monitor.jpg" alt="Img" height="154" width="213"></a>
					</li>
					<li>
						<a href="blog.html"><img src="images/power.jpg" alt="Img" height="154" width="213"></a>
					</li>
                    <li></li>
				</ul>
			</div>
				<h1>Contact Us</h1>
				<form action="" method="post">
						  <table align="center" width="542" height="255" border="1">
						    <tr>
						      <td width="80">NAME</td>
						      <td width="450"><label for="name2"></label>
					          <input type="text" name="name" id="name2"></td>
					        </tr>
						    <tr>
						      <td>EMAIL</td>
						      <td><label for="email"></label>
					          <input type="text" name="email" id="email"></td>
					        </tr>
						    <tr>
						      <td>SUBJECT</td>
						      <td><label for="subject"></label>
					          <input type="text" name="subject" id="subject"></td>
					        </tr>
						    <tr>
						      <td>MESSAGE</td>
						      <td><textarea name="message" id="message" cols="45" rows="5"></textarea></td>
					        </tr>
						    <tr>
						      <td colspan="2"><input type="submit" name="submit" id="submit" value="Submit"></td>
					        </tr>
					      </table>
				</form>
		</div>
	</div>
	<div id="footer">
		<ul id="featured" class="wrapper clearfix">
<li>
				<img src="images/computer-parts-intel-devon.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.html">Category 1</a></h3>
				<p>The intel core i7 has dual core CPUs. it also offers quad and six-core chips; these version are thus greter in processing power than the dual-core chips.</p>
			</li>
			<li>
				<img src="images/blackcase.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.html">Category 2</a></h3>
				<p>Dell model: F96Y3 H6HJ1. OEM Dell inspiration 620s Desktop PC Case. This is acase pulled from a Dell desktop. The unit works perfectly and has no apparent defects or flow.
				</p>
			</li>
			<li>
				<img src="images/mouse.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.html">Category 3</a></h3>
				<p>
					Traditional comuter mouse button will be the most affordable, when they make use of simple costrucion..
				</p>
			</li>
			<li>
				<img src="images/motherboard.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.html">Category 4</a></h3>
				<p>Asus SABERTOOTH 990FX AM3+ AMD 990FX SATA 6Gb/s USB 3.0 ATX AMD Motherboard</p>
			</li>
		</ul>
		<div class="body">
			<div class="wrapper clearfix">
			  <p class="footnote">
				  © Copyright © 2014 MKHARI TECH
				</p>
			</div>
		</div>
	</div>
</body>
</html>