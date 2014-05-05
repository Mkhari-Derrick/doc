<?php
//displays the products that already there in the database on the form
require("scripts/sql_scripts.class.php");
$obj=new sql_commands();
$msg="";
$dis_music=$obj->select_for_hardrive();
//$dis_games=$obj->select_for_games();
//$dis_movie=$obj->select_for_movies();
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
				<li>
					<a href="gallery.php">GALLERY</a>
				</li>
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
    <table width="539" height="324" border="2">
                  <tr>
                    <td height="18" bgcolor="#FFCC99">hard drive</td>
                    <td bgcolor="#FFCC99">Games</td>
                    <td bgcolor="#FFCC99">Movies</td>
                  </tr>
                  <tr>
                    <td><?php  echo $dis_music;?></td>
                    <td><?php echo $dis_games;?></td>
                    <td><?php  echo $dis_movie;?></td>
                  </tr>
    </table>
	</div>
            <form action="" method="post" name="form1" class="form-horizontal" id="form1">
  <div align="center">
    <table width="200" border="1"> 
	  <?php //if(isset($_POST['search']))
	
		//$comp_vendor = trim($_POST['comp_vendor']);
		//$email2 = trim($_POST['cell']);
	
 		 // if (!get_magic_quotes_gpc()) {
			//$comp_vendor = addslashes($comp_vendor);
  			//}

		  @ $db = new mysqli('localhost', 'mab','mab','users');
		
		  if (mysqli_connect_errno()) {
			 echo "<p> "."Error: Could not connect to database.  Please try again later."."</p> ";
			 exit;
		  }
		  
		  $query = "select * from comp";		
		$result = $db->query($query);
		$num_results = $result->num_rows;
	
		for ($i=0; $i <$num_results; $i++) {
		$row = $result->fetch_assoc();
		echo "<p><strong>"." comp_id: ";
		echo htmlspecialchars(stripslashes($row['comp_id']))."</p>";
		echo "<p><strong>"."comp_name: ";
		echo htmlspecialchars(stripslashes($row['comp_name']))."</p>";
		echo "<p><strong>"." comp_vendor: ";
		echo htmlspecialchars(stripslashes($row['comp_vendor']))."</p>";
		echo "<p><strong>"." comp_price: ";
		echo htmlspecialchars(stripslashes($row['comp_price']))."</p>";
		echo "<p><strong>"."comp_serial: ";
		echo htmlspecialchars(stripslashes($row['comp_serial']))."</p>";
		
		}
	  $db->close();
?>
    </table>
   
</div>
</form>

</div>
</body> 
</html>