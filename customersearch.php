<?php
include_once "settings/settings.php"; 
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
if(isset($_POST['hide']) AND ($_POST['hide'])=='h')
{
$a=trim($_POST['search']); 
$s=$obj->viewshop($a); 
$smartyObj->assign("view", $s);
} 
$smartyObj->display('customerheader.tpl');
$smartyObj->display('customersearch.tpl');
$smartyObj->display('customerfooter.tpl');
}
else
{	
	Header("location:login.php");
}
?>
