<?php
require("scripts/sql_scripts.class.php");
$obj=new sql_commands();
$msg="";
$dis_hardrive=$obj->select_for_hardrive();
$dis_mouse=$obj->select_for_mouse();
$dis_keyboard=$obj->select_for_keyboard();
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
				<h2 align="center">here you can see all the components </h2>
                
			</div>
            <form action="" method="post" name="form1" class="form-horizontal" id="form1">
  <div align="center">
    <table width="539" height="324" border="2">
      <tr>
    <td height="18" bgcolor="#FFCC99">hardrive</td>
    <td bgcolor="#FFCC99">mouse</td>
    <td bgcolor="#FFCC99">keyboards</td>
  </tr>
      <tr>
     <td><?php  echo $dis_hardrive;?></td>
    <td><?php echo $dis_mouse;?></td>
    <td><?php  echo $dis_keyboard;?></td>
      </tr>
    </table>
  </div>
</form>

</div>
</body> 
</html>