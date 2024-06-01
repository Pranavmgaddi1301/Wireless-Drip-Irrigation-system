<?php
session_start();

//
//echo "<<< " . $page_title . " >>";


//if($page_title != null && $page_title != "CPI values")
//{
	if(!isset($_SESSION['user'])){
		//if($_SESSION['user'] != "admin" && 
		//	($page_title == "Licence data" || $page_title == "Penalty data") ){
				header('Location: '."/");	
		//}
	//}else{
		header('Location: '."/login.php");
	}
//}else{
//	$_SESSION['user'] = "";
//}

?>