<?php
header("Access-Control-Allow-Origin: *");
header("Content-type: application/json");
require('functions.inc.php');

$output = array(
	"error" => false,
	"string" => "",
	"answer" => 0
);

$t = $_REQUEST['text'];

if($t.is_string)
{
	$answer=wordcount($t);

	$output['string']="Contains ".$answer." words";
	$output['answer']=$answer;
	
	echo json_encode($output);
	exit();
}
else 
{
	$output['error']=TRUE;
	$output['string']="";
	$output['answer']=0;

	echo json_encode($output);
	exit();
}
