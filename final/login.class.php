<?php

function user_exist($username){
	$username=sanitize($username);
	return(mysql_result(mysql_query("SELECT COUNT(`user_id`) from `user` WHERE `username` = '$username'"),0)==1) ? true:false ;
}



?>