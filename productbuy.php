<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$loginkey=$_COOKIE['lkey'];
$productkey=$_GET['key'];
$amt=$_GET['amt'];
$log=$_GET['log'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
   
            if(isset($_POST['quantity'])AND($_POST['quantity'])!=null)
            {
                      
                        $quantity=trim($_POST['quantity']);
                        $obj->buyproduct($quantity,$productkey,$loginkey,$amt,$log);
                    
          
    }
    else
    echo"<script> alert('quantity is empty')</script>";
}
$smartyObj->display('customerheader.tpl');
$smartyObj->display('productbuy.tpl');
$smartyObj->display('customerfooter.tpl');

}
else
{	
	Header("location:login.php");
}
?>
