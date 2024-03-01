<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$id=$_GET['key'];
$amt=$_GET['amt'];
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
    if(isset($_POST['days'])AND($_POST['days'])!=null)
    {
        if(isset($_POST['address'])AND($_POST['address'])!=null)
        {
            if(isset($_POST['quantity'])AND($_POST['quantity'])!=null)
            {
                        $days=trim($_POST['days']);
                        $address=trim($_POST['address']);
                        $quantity=trim($_POST['quantity']);
                        $obj->rentp($days,$address,$quantity,$id,$key,$amt);
                    
            }
            else
            echo"<script> alert('quantity is empty')</script>";
                                 
            
        }
        else
        echo"<script> alert('Address is empty')</script>";
   
    }
    else
    echo"<script> alert('days is empty')</script>";
}
$smartyObj->display('customerheader.tpl');
$smartyObj->display('productrent.tpl');
$smartyObj->display('customerfooter.tpl');
}
else
{	
	Header("location:login.php");
}

?>
