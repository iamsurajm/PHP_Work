<?php
$first=$_POST['first'];
//echo $first;
$second=$_POST['second'];
$op=$_POST['a'];
//echo $op;

if($op=='add')
{
	$result=$first+$second;
	echo $result;
}
if($op=='sub')
{
	$result=$first-$second;
	echo $result;
}
if($op=='mul')
{
	$result=$first*$second;
	echo $result;
}
if($op=='div')
{
	$result=$first/$second;
	echo $result;
}
?>