<?php
if(isset($_GET['submit']))
{
	$name=isset($_GET['name'])?$_GET['name']:'';
	$email=isset($_GET['email'])?$_GET['email']:'';
	$arr=array();
	
	
	$arr['name']=$name;
	$arr['email']=$email;
	echo json_encode($arr);
	
}


?>