<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$log=$_COOKIE['lkey'];
$key=$_GET['key'];
$id=$_GET['okey'];
//echo $id;exit;
$temp=$obj->offereditview($key,$id);
$smartyObj->assign("data",$temp);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
    if(isset($_POST['offers'])AND($_POST['offers'])!=null)
    {
        if(isset($_POST['date'])AND($_POST['date'])!=null)
    {

        
                        $offers=trim($_POST['offers']);
                        $days=trim($_POST['date']);

                        $obj->offersedit($offers,$days,$id);
                    
                     
                    }
                                           
                    else
                    echo"<script> alert('days is empty')</script>";
                }
                    else
                    echo"<script> alert('offers is empty')</script>";
              
}
$smartyObj->display('shopheader.tpl');
$smartyObj->display('offersedit.tpl');
$smartyObj->display('customerfooter.tpl');
}
else
{	
	Header("location:login.php");
}


?>
