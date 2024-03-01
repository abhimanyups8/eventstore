<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$id1=$_COOKIE['lkey'];
$key=$_GET['key'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
    if(isset($_POST['reply'])AND($_POST['reply'])!=null)
    {
                        $reply=trim($_POST['reply']);
                       
                        $obj->replyinsert($reply,$key);
                    }
                                           
                    else
                    echo"<script> alert('feedback is empty')</script>";
              
}
$smartyObj->display('replyupdate.tpl');
}
else
{	
	Header("location:login.php");
}


?>
