<?php
require("scripts/shopping_cart.class.php");
session_start();
//displays the products that the customer selected and stored them on a shopping cart 
if(isset($_GET['add']))
{
	
	$_SESSION['cart_'.$_GET['add']]+=1;
}

if(isset($_GET['sub']))
{
	
	$_SESSION['cart_'.$_GET['sub']]--;
}

if(isset($_GET['remov']))
{
	
	$_SESSION['cart_'.$_GET['remov']]=0;
}

$obj=new shopping_cart();
$output=$obj->cart($_SESSION);
$total=$obj->total_cost_to_pay();

if(isset($_GET['clear'])&&isset($_GET['clear'])=="empty")
{
	session_destroy();
	header("Location: index.php");
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
				<h2 align="center">successfuly logged in</h2>
                
			</div>
            <form action="" method="post" name="form1" class="form-horizontal" id="form1">
  <div align="center">
    <p>&nbsp;</p>
    <div style="margin:24px text-align:left">
      <table width="98%" border="1" cellpadding="6" cellspacing="0">
        <tr>
          <td width="15%" bgcolor="#FFCC99"><strong>Product</strong></td>
          <td width="22%" bgcolor="#FFCC99"><strong>Description</strong></td>
          <td width="11%" bgcolor="#FFCC99"><strong>Price</strong></td>
          <td width="11%" bgcolor="#FFCC99"><strong>Categoty</strong></td>
          <td width="14%" bgcolor="#FFCC99"><strong>Sub-Category</strong></td>
          <td width="10%" bgcolor="#FFCC99"><strong>Quantity</strong></td>
          <td width="17%" bgcolor="#FFCC99"><strong>add/sub/remove</strong></td>
        </tr>
        <?php echo $output;?>
      </table>
      <p>      
      <div align="right">
        <p><a href="user_login.php"><img src="proImages/add-to-the-cart-button.png" alt="" width="92" height="83" align="right"/></a><br />
        </p>
        <p>&nbsp;</p>
        <p>&nbsp; </p>
      </div>
      </p>
      <p>&nbsp;</p>
      <p><?php echo $total;?></p>
      <p><br />
        <br />
        <a href=cart.php?clear=empty>Empty Shopping cart</a></p>
      <br />
    </div>
    <p>&nbsp;</p>
  </div>
</form>

</div>
</body> 
</html>