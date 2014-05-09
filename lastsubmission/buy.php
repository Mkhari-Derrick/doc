<?php
session_start();
//users sends necessary information for him/her to be able to make an order
require("scripts/shoppingCart.class.php");
$myObj=new shoppingCart();
$tabl=$myObj->order_display($_SESSION);
$total_cost=$myObj->cost();
$total=$myObj->total_cost_to_pay();

if($_SERVER['REQUEST_METHOD']=="POST")
{
	
	//header("Location: order.php");	

//accepting the variables from the text boxes
$credit=$_POST["credit"];
$amount=$_POST["amount"];
if(isset($credit))
{
	if(!preg_match("/[0-9]{16}/",$credit))
	{
		echo "Credit number not valid <a href='buy.php'>Click Here</a>";
		exit;	
	}
	
	if($total_cost==0)
	{
		session_destroy();
		echo "Your shopping card is empty so u can't do any of the transaction so you will be logged out <a href='index.php'>Click Here</a>";	
		exit;	
	}
	
	
	//checks if the user is paying enough
	if($total_cost >= $amount)
	{
		 
		 $new_id=$myObj->order($_SESSION["comp_id"],$total_cost,$amount);
		 $myObj->order_items($new_id,$_SESSION);
		 session_destroy();
		  echo "Order successfully processed.... You will be locked out by the security of the system... Thanks <a href='index.php'>Click Here</a>";
		  exit;
	}
	else
	{
		echo "You dont have enough cash for you to pay for products <a href='buy.php'>Click Here</a>";	
		exit;
	}
	
	
	}
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
                <li class="selected">
					<a href="index.php">LOGOUT</a>
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
				<h2 align="center">banking details</h2>
                
			</div>
            <form action="" method="post" name="form1" class="form-horizontal" id="form1">
  <div align="center">
    <p>&nbsp;</p>
    <div align="center" style="margin:-left:24px;">
      <p>Please provide neccessary information</p>
      <table width="242" border="0">
        <tr>
          <td width="78">Total Cost: </td>
          <td width="148"><input name="Cost" type="text" id="cost" value="<?php echo $total_cost; ?>" readonly="readonly" size="4"/></td>
        </tr>
        <tr>
          <td>Credit Card No:</td>
          <td><input type="text" name="credit" id="credit" /></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" value="Order" /></td>
        </tr>
      </table>
      <p><a href="cart.php">Back</a><br/>
      </p>
</div>
<p>&nbsp;</p>
  </div>
</form>

</div>
</body> 
</html>