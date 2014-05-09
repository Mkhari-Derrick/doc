<?php 
	session_start();
	
	if(!$_SESSION['admin']==1)
	{
		header("Location: index.php");
		}
		else
		{
			$msg = "Welcome Username ".$_SESSION['username'];
		}
		
		if($_REQUEST['logout']== 1)
		{
			session_destroy();
			header("Location: index.php");
			die();
			}
?>
 <?php


 
 $msg = "";
 $id="";
 $table ="";

@ $db = new mysqli('localhost', 'mab','mab','users');

  if (mysqli_connect_errno()) {
     echo "Error: Could not connect to database.  Please try again later.";
     exit;
  }
  $query = "select * from user where username='".$_SESSION['username']."'";		
	$result = $db->query($query);
	$num_results = $result->num_rows;
	
	//echo "<p>Number of items found: ".$num_results."</p>";
	$table .= "<table  border='15 '> ";
	for ($i=0; $i <$num_results; $i++) {
	$row = $result->fetch_assoc();
	$id=$row["user_id"];
	$table .= "<tr>";
	$table .= "<th scope='row' bgcolor='#996600'>". "Name: ";
	$table .= "<td>".htmlspecialchars(stripslashes($row['name']));
	$table .= "</tr>";
	$table .= "<tr>";
	$table .= "<th scope='row' bgcolor='#996600'>"."<br />Surname: ";
	$table .= "<td>".stripslashes(stripslashes($row['surname'])) ;
	$table .= "</tr>";
	$table .= "<tr>";
	$table .= "<th scope='row' bgcolor='#996600'>"." <br />Phone Number: ";
	$table .= "<td>".stripslashes(stripslashes($row['cell']));
	$table .= "</tr>";
	$table .= "<tr>";
	$table .= "<th scope='row' bgcolor='#996600'>"."<br />Password: ";
	$table .= "<td>".stripslashes(stripslashes($row['password']));
	$table .= "</tr>";
	$table .= "<tr>";
	$table .= "<th scope='row' bgcolor='#996600'>"."<br />Email: ";
	$table .= "<td>".stripslashes(stripslashes($row['email']));
	$table .= "</tr>";
	$table .= "<tr>";
	$table .= "<th scope='row' bgcolor='#996600'>"." <br />ID Number: ";
	$table .= "<td>".stripslashes(stripslashes($row['id_number']));
	$table .= "</tr>";
	
	}
	$table .= "</table>";
$result->free();
$db->close();

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>mkhari tech</title>
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
  <?php
  
  ?>
  </div>
</form>

</div>
</body> 
</html>