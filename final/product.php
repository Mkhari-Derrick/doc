<?php
require("scripts/sql_scripts.class.php");
//display the specific product that the user selected from the from called product_list.php
session_start();
$obj=new sql_commands();
$output="";
$comp_id=0;
//$_SESSION['cart_'.$_GET['comp_id']]="";

	//checks if the product was selected
	if(isset($_GET['comp_id']))
	{
		$comp_id=$_GET['comp_id'];
		$output=$obj->view_specific_product($comp_id);		
	}
	
	
		if(isset($_POST['pid']))
		{
			$pid=$_POST['pid'];
			$_SESSION['cart_'.$pid]+=1;
			header("Location: cart.php");
		
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
					<a href="product_list.php">COMPONENTS</a>
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
				<h2 align="center">components</h2>
                
			</div>
            <form action="" method="post" name="form1" class="form-horizontal" id="form1">
  <div align="center">
    <table width="317" border="0">
      <tr>
        <td width="20%" valign="top"><img src="proImages/<?php echo $comp_id;?>.jpg" width="142" height="188" /> <a href="proImages/<?php echo $comp_id;?>.jpg">View Full Image</a></td>
        <td width="80%" valign="top"><?php echo $output;?>
          <p>&nbsp;</p>
          <p>
            <input type="hidden" name="pid" value="<?php echo $comp_id;?>"/>
            <input type="submit" value="Add to Cart" />
          </p>
          <p>&nbsp;</p>
          <p><a href="product_list.php"><-back</a></p></td>
      </tr>
    </table>
  </div>
</form>

</div>
</body> 
</html>