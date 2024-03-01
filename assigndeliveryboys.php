<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$cartid=$_GET['key'];
//echo $cartid;exit;
$log=$_GET['log'];
$obj->assigndeliveryboys($cartid,$log);
}
else
{	
	Header("location:login.php");
}
?>