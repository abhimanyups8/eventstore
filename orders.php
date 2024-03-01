<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";           
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$temp=$obj->ordersview($key);
$smartyObj->assign("data",$temp);
$smartyObj->display('shopheader.tpl');
$smartyObj->display('orders.tpl');
$smartyObj->display('shopfooter.tpl');
}
else
{	
	Header("location:login.php");
}
?>
