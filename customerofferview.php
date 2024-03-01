<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$id1=$_COOKIE['lkey'];
$key=$_GET['key'];
$temp=$obj->customeroffersview($key);
$smartyObj->assign("data",$temp);
$smartyObj->display('customerheader.tpl');
$smartyObj->display('customeroffersview.tpl');
$smartyObj->display('customerfooter.tpl');
}
else
{	
	Header("location:login.php");
}
?>