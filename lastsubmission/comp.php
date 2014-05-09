<?php
session_start();
	if(isset($_POST['comp_submit']))
{
	$comp_name=($_REQUEST['comp_name']);
	$comp_vendor=($_REQUEST['comp_vendor']);
	$comp_price=($_REQUEST['price']);
	$comp_serial=($_REQUEST['comp_serial']);
	$category=($_REQUEST['category']);
	
	if($comp_name && $comp_vendor && $comp_serial && $comp_price && $category)
	{
			$conn=new mysqli("localhost",'mab','mab','users');
			if(!$conn)
			{
				echo "connection failed";	
			}
			$query="INSERT INTO comp VALUES(null,'".$comp_name."','".$comp_vendor."','".$comp_price."','".$category."','".$comp_serial."')";
			$results=$conn->query($query);
			if(!$results)
			{
		        echo "query failed";
				exit;	
			}
			echo "you have successfully added";
	}
	else
	{
		echo "all fields are required";	
	}
}
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
#adbox #form1 div table tr td {
	color: #808080;
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
				<li></li>
                <li>
					<a href="admin.login.php">LOGOUT</a>
			  </li>
				<li></li>
                <li></li>
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
				<h2 align="center">ADD COMPONENTS</h2>
                
			</div>
            <form action="" method="post" name="form1" class="form-horizontal" id="form1">
  <div align="center">
    <table width="200" border="1">
      <tr>
        <td>NAME</td>
        <td>CATEGORY</td>
        <td><div align="center">VENDOR</div></td>
        <td>PRICE</td>
        <td><div align="center">SERIAL</div></td>
      </tr>
      <tr>
        <td><input type="text" name="comp_name" id="comp_name"></td>
        <td><label for="category"></label>
          <input type="text" name="category" id="category">          <label for="comp_name"></label></td>
        <td><label for="comp_vendor"></label>
          <input type="text" name="comp_vendor" id="comp_vendor"></td>
        <td><label for="price"></label>
          <input type="text" name="price" id="price"></td>
        <td><label for="comp_serial">
          <input type="text" name="comp_serial" id="comp_serial">
        </label></td>
      </tr>
      <tr>
        <td colspan="5"><div align="center">
          <input type="submit" name="comp_submit" id="comp_submit" value="Submit">
        </div></td>
        </tr>
    </table>
  </div>
</form>

</div>
</body> 
</html>