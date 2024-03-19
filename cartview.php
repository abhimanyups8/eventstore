
<?php
include_once "settings/settings.php"; 
include_once "classes/userclass.php";
$obj=new userclass();
$obbj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
// $am=$_GET['total_amount'];
// $ss=$obbj->totalamountview($key);
// $smartyObj->assign("data",$ss);
$s=$obj->cartselection($key);
$smartyObj->assign("view",$s);
$smartyObj->display('customerheader.tpl');
$smartyObj->display('cartview.tpl');
$smartyObj->display('customerfooter.tpl');
}
else
{	
	Header("location:login.php");
}
?>
