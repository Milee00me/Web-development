<?php

function fix_name($name){
	$name=trim($name);
	$name=ucfirst($name);
	$name=addslashes($name);
	return $name;
}

function fix_email($email){
	$email=trim($email);
	$email=strtolower($email);
	$email=addslashes($email);
	return $email;
}

function fix_address($address){
	$address=trim($address);
	$address=strtolower($address);
	$address=addslashes($address);
	return $address;
}

function fix_rollno($rollno){
	$rollno=trim($rollno);
	$rollno=strtoupper($rollno);
	$rollno=addslashes($rollno);
	return $rollno;
}
?>
