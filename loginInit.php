<?php


// Under construction

// include database and object files
include_once 'classes/database.php';
include_once 'classes/licence.php';
include_once 'initial.php';


if(isset($_REQUEST['user_name']) && isset($_REQUEST['password'])){
	
	
}else{
	
}

//$user_name
//$password

$user = new Licence($db);
$user->id = $id;
$user->getUser();


?>