<?php
require("Connect.class.php");
class sql_commands extends Connect
{
		private $db;
		
	function select_for_hardrive()
	{
		$ad_novels="";
		$comp_id="";
		$comp_name="";
		$comp_price="";
		
	$this->db=Connect::connect();
		$query="select * from comp";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$games=$rows['category'];
				if($games=="hardrive")
				{
					$comp_id=$rows['comp_id'];
					$comp_name=$rows['comp_name'];
					$comp_price=$rows['comp_price'];
									$ad_novels.='<table border="0" cellspacing="0" cellpadding="6">
	<tr>			
		<td width="17%" valign="top"><a href="product.php?comp_id='.$comp_id.'"><img style="border:#666 1px solid;" src="proImages/'.$comp_id.'.jpg" height="102" border="1" /></a></td>
		<td valign="top">'.$comp_name.'<br/> R'.$comp_price.'<br/>
		<a href="product.php?comp_id='.$comp_id.'">View Product</a>
		</tr> 		
				</table>';     
				}
			
  
				
			}
		}
		return $ad_novels;
	}
	function select_for_mouse()
	{
		$ad_novels="";
		$comp_id="";
		$prod="";
		$price="";
		
	$this->db=Connect::connect();
		$query="select * from comp";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$games=$rows['category'];
				if($games=="mouse")
				{
					$comp_id=$rows['comp_id'];
					$comp_name=$rows['comp_name'];
					$comp_price=$rows['comp_price'];
									$ad_novels.='<table border="0" cellspacing="0" cellpadding="6">
	<tr>			
		<td width="17%" valign="top"><a href="product.php?comp_id='.$comp_id.'"><img style="border:#666 1px solid;" src="proImages/'.$comp_id.'.jpg" height="102" border="1" /></a></td>
		<td valign="top">'.$comp_name.'<br/> R'.$comp_price.'<br/>
		<a href="product.php?comp_id='.$comp_id.'">View Product</a>
		</tr> 		
				</table>';     
				}
			
  
				
			}
		}
		return $ad_novels;
	}
	function select_for_keyboard()
	{
		$ad_novels="";
		$id="";
		$prod="";
		$price="";
		
	$this->db=Connect::connect();
		$query="select * from comp";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$games=$rows['category'];
				if($games=="keyboard")
				{
					$comp_id=$rows['comp_id'];
					$comp_name=$rows['comp_name'];
					$comp_price=$rows['comp_price'];
									$ad_novels.='<table border="0" cellspacing="0" cellpadding="6">
	<tr>			
		<td width="17%" valign="top"><a href="product.php?comp_id='.$comp_id.'"><img style="border:#666 1px solid;" src="proImages/'.$comp_id.'.jpg" height="102" border="1" /></a></td>
		<td valign="top">'.$comp_name.'<br/> R'.$comp_price.'<br/>
		<a href="product.php?comp_id='.$comp_id.'">View Product</a>
		</tr> 		
				</table>';     
				}
			
  
				
			}
		}
		return $ad_novels;
	}
	//method retrieves all the information that is stored in session and returns
	function shopping_cart($comp_id)
	{
		$this->db=Connect::connect();
		$output="";
		$query="select * from comp where comp_id='".$comp_id."'";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$comp_name=$rows['comp_name'];
				$comp_price=$rows['comp_price'];
				$category=$rows['category'];
				
				$output.="<tr>";
				$output.="<td><a href=./product.php?comp_id=$comp_id>$product</a><br/><img src=\"proImages/$comp_id.jpg\" alt=\"$comp_name\" width=\"40\" height=\"52\" border=\"1\" </td>";
				$output.="<td>".$comp_price."</td>";
				$output.="<td>".$category."</td>";
			}
		}
		return $output;
	}
	
	//method calculates the total cost tha a user must pay after making a purchase
	function total_cost($comp_id,$value)
	{
		$this->db=Connect::connect();
		$output="";
		$subtotal="";
		$total="";
		$query="select * from comp where comp_id='".$comp_id."'";
		$result=$this->db->query($query);	
		$num_row=$result->num_rows;
		
		if($num_row>0)
		{
			for($a=0; $a<$num_row; $a++)
			{
				$rows=$result->fetch_assoc();
				$comp_price=$rows['comp_price'];
				$subtotal=$value*$comp_price;
			}
			//$total+=$subtotal;
		}
		return $subtotal;
	}
}

?>