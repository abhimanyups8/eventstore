<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$id1=$_COOKIE['lkey'];
$key=$_GET['key'];
$product=$_GET['productid'];
//echo $product;exit;
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
    if(isset($_POST['complaints'])AND($_POST['complaints'])!=null)
    {
                        $complaints=trim($_POST['complaints']);
                       
                        $obj->complaintinsert($complaints,$id1,$product);
                    }
                                           
                    else
                    echo"<script> alert('feedback is empty')</script>";
              
}
$smartyObj->display('customerheader.tpl');
$smartyObj->display('complaints.tpl');
$smartyObj->display('customerfooter.tpl');
}
else
{	
	Header("location:login.php");
}


?>
