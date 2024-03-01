<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";           
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$temp=$obj->adminfeedview();
$smartyObj->assign("data",$temp);
$smartyObj->display('adminfeedview.tpl');
}
else
{	
	Header("location:login.php");
}
?>