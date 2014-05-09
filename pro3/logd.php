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
#adbox #form1 div table tr td {
	color: #808080;
}
#adbox #form1 div p {
	color: #F00;
}
#adbox #form1 div p {
	color: #808040;
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
					<a href="index.php">LOGOUT</a>
				</li>
				<li>
					<a href="aboutus.php">ABOUT US</a>
				</li>
                <li>
					<a href="contactus.php">CONTACT US</a>
				</li>
				<li>
					<a href="compi.php">GALLERY</a>
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
				<h2 align="center">successfuly logged in</h2>
                
			</div>
            <form action="" method="post" name="form1" class="form-horizontal" id="form1">
  <div align="center">
    <p><?php if(isset($_POST['search']))
	{
		$comp_vendor = trim($_POST['comp_vendor']);
		//$email2 = trim($_POST['cell']);
	
 		  if (!get_magic_quotes_gpc()) {
			$comp_vendor = addslashes($comp_vendor);
  			}

		  @ $db = new mysqli('localhost', 'mab','mab','users');
		
		  if (mysqli_connect_errno()) {
			 echo "<p> "."Error: Could not connect to database.  Please try again later."."</p> ";
			 exit;
		  }
		  
		  $query = "select * from comp where comp_vendor ='$comp_vendor'";		
		$result = $db->query($query);
		$num_results = $result->num_rows;
		if(!$num_results){
			echo "user not found in the database";	
		}
	
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
}?>&nbsp;</p>
    <table width="328" height="202" border="1">
      <tr>
        <td height="82">search type</td>
        <td><label for="search2"></label>
          <label for="comp_vendor"></label>
          <input type="text" name="comp_vendor" id="comp_vendor"></td>
        </tr>
      <tr>
        <td height="109" colspan="2"><label for="term">
          <div align="center">
            <p>
              <input type="submit" name="search" id="search" value="Submit">
              </p>
            <p>            view available components click <a href="product_list.php">here</a></p>
          </div></td>
      </tr>
    </table>
   
  </div>
</form>

</div>
</body> 
</html>