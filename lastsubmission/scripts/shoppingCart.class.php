<?php
require("scripts/sql_scripts.class.php");

class shoppingCart extends sql_commands
{
	private $total;
	private $obj;
	//this method recieves a session variable sended by a form called cart.php and sends the value to the method called shopping_cart return the information from the database and sends the information to cart.php
	function cart($session)
	{
		$cart_info="";
		$this->obj=new sql_commands();
		foreach($session as $comp_name =>$value)
		{
			if($value>0)
			{
				if(substr($comp_name,0,5)=="cart_")
				{
					$comp_id=substr($comp_name,5,(strlen($comp_name)-5));
					$cart_info.=$this->obj->shopping_cart($comp_id)."<td>".$value."</td><td><a href='cart.php?add=$comp_id'>[+]</a> <a href='cart.php?sub=$comp_id'>[-]</a> <a href='cart.php?remov=$comp_id'>[remove]</a></td></tr>";					
					$this->total+= $this->obj->total_cost($comp_id,$value);
		
				}
				
			}
		
	
		}
		return $cart_info;	
	}
	
	//this method display the order by recieving a session variable and sends the value to shopping_cart returning an information to a form called order.php
	function order_display($session)
	{
		$cart_info="";
		$this->obj=new sql_commands();
		foreach($session as $comp_name =>$value)
		{
			if($value>0)
			{
				if(substr($comp_name,0,5)=="cart_")
				{
					$comp_id=substr($comp_name,5,(strlen($comp_name)-5));
					$cart_info.=$this->obj->shopping_cart($comp_id)."<td>".$value."</td>";					
					$this->total+= $this->obj->total_cost($comp_id,$value);
		
				}
				
			}
		
	
		}
		return $cart_info;	
	}
	
	//the method sends the total to the cart.php form and displays it
	function total_cost_to_pay()
	{
		$t=$this->total;
		$vat=$t*0.14;
		return "<br/><br/>"."Overall Total: R".$this->total."<br/> VAT: R".$vat;	
	}
	//return amount due
	function cost()
	{
		return $this->total;	
	}
	
	//invokes a method that captures the current order
	function order($comp_id,$total_cost,$total)
	{
		return $this->obj->captureOrder($comp_id,$total_cost,$total);
	}
	
	//invokes the method called order_items from sql_scripts.class.php to store the orders items in a database
	function order_items($comp_id,$session)
	{
		$this->obj->order_item($comp_id,$session);
	}
	
}



?>