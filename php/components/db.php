<?php 
$root_path = $_SERVER["DOCUMENT_ROOT"];
$db['db_host'] = "mysql";
$db['db_user'] = "panupongdeve";
$db['db_pass'] = "password";
$db['db_name'] = "db";

foreach($db as $key => $value){
	define(strtoupper($key), $value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if($connection){
// echo "We are connected";
}


?>