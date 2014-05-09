<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<html>
<head>
	<meta charset="UTF-8">
	<title>Contact - Astronomy Website Template</title>
	<link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
	<div id="header">
		<div class="wrapper clearfix">
			<div id="logo">
				<a href="index.html"><img src="images/logo.png" alt="LOGO"></a>
			</div>
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
				<li>
					<a href="gallery.html">GALLERY</a>
				</li>
			</ul>
		</div>
	</div>
	<div id="contents">
		<div id="contact" class="wrapper clearfix">
			<div id="sidebar">
				<ul>
					<li>
						<a href="blog.html"><img src="images/earth-small.jpg" alt="Img" height="154" width="213"></a>
					</li>
					<li>
						<a href="blog.html"><img src="images/spaceshuttle-closeup.jpg" alt="Img" height="154" width="213"></a>
					</li>
				</ul>
				<div class="click-here">
					<h1>Lorem Ipsum Dolor!</h1>
					<a href="index.html" class="btn1">Click Here!</a>
				</div>
			</div>
			<div class="main">
				<h1>Contact Us</h1>
				<form action="index.html" method="post">
					<ul>
						<li>
							<label>Enter your full name here.</label>
							<input type="text" value="Full Name" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>
							<label>Enter your email address here.</label>
							<input type="text" value="Email Address" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>
							<label>Enter the Subject message here.</label>
							<input type="text" value="Subject" onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">
						</li>
						<li>
							<label class="msg">Enter your Message here.</label>
							<textarea onBlur="javascript:if(this.value==''){this.value=this.defaultValue;}" onFocus="javascript:if(this.value==this.defaultValue){this.value='';}">Message</textarea>
							<div class="checkbox">
								<label for="terms">
									<input type="checkbox" id="terms">
									I agree to the Terms and Conditions</label>
								<br>
								<label for="subscribe">
									<input type="checkbox" id="subscribe">
									Subscribe to newsletter</label>
							</div>
							<input type="submit" value="Send Now" class="btn3">
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	<div id="footer">
		<ul id="featured" class="wrapper clearfix">
			<li>
				<img src="images/astronaut.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.html">Category 1</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/earth.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.html">Category 2</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/spacecraft-small.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.html">Category 3</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
			<li>
				<img src="images/space-shuttle.jpg" alt="Img" height="204" width="220">
				<h3><a href="blog.html">Category 4</a></h3>
				<p>
					Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec mi tortor. Phasellus commodo semper vehicula.
				</p>
			</li>
		</ul>
		<div class="body">
			<div class="wrapper clearfix">
			  <p class="footnote">
				  © Copyright © 2023.Company name all rights reserved
				</p>
			</div>
		</div>
	</div>
</body>
</html>