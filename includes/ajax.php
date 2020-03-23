<?php
session_start();
if (!isset( $_POST['action'])){
	$result['error'] = '<b>Dėmesio!</b> Negauti duomenys.';
	die(json_encode($result));
}
//Typical headers
header('Content-Type: text/html');


//Disable caching
header('Cache-Control: no-cache');
header('Pragma: no-cache');


$action = $_POST['action'];

//A bit of security
$allowed_actions = array(
	''
);

if(in_array($action, $allowed_actions)){
	include('functions.php');
	call_user_func($action);
} else {
    $result['error'] = '<b>Dėmesio!</b> Vykdoma neleistina funkcija.';
	die(json_encode($result));
}
