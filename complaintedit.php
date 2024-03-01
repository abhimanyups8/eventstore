<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$log=$_COOKIE['lkey'];
$key=$_GET['key'];
$id=$_GET['prod'];
//echo $id;exit;
$temp=$obj->complaintseditview($key);
$smartyObj->assign("data",$temp);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
    if(isset($_POST['complaint'])AND($_POST['complaint'])!=null)
    {

        
                        $complaint=trim($_POST['complaint']);
                        $obj->complaintsedit($complaint,$id);
                    
                     
                    
                }
                    else
                    echo"<script> alert('complaint is empty')</script>";
              
}
$smartyObj->display('customerheader.tpl');
$smartyObj->display('complaintedit.tpl');
$smartyObj->display('customerfooter.tpl');
}
else
{	
	Header("location:login.php");
}


?>
