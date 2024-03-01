
<?php
include_once "settings/settings.php"; 
include_once "classes/userclass.php";
$obj=new userclass();
$obbj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$id1=$_COOKIE['lkey'];

$key=$_GET['key'];

$s=$obj->shopdetails($key);
$smartyObj->assign("view",$s);
$d=$obj->shopproducts($key);
$smartyObj->assign("data",$d);

$smartyObj->display('customerheader.tpl');
$smartyObj->display('shopdetails.tpl');
$smartyObj->display('customerfooter.tpl');
}
else
{	
	Header("location:login.php");
}

?>
