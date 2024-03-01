<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$id1=$_COOKIE['lkey'];
$key=$_GET['key'];
//echo $key;exit;
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
    if(isset($_POST['reason'])AND($_POST['reason'])!=null)
    {
                        $reason=trim($_POST['reason']);
                       
                        $obj->reasoninsert($reason,$id1,$key);
                    }
                                           
                    else
                    echo"<script> alert('feedback is empty')</script>";
              
}
$smartyObj->display('customerheader.tpl');
$smartyObj->display('return.tpl');
$smartyObj->display('customerfooter.tpl');
}
else
{	
	Header("location:login.php");
}


?>
