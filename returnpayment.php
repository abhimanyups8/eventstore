<?php 
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$amt=$_GET['am'];
$log=$_GET['log'];
$ckey=$_GET['ckey'];


if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
      
        if(isset($_POST['cnumber'])AND($_POST['cnumber'])!=null)
        {
            
                if(isset($_POST['edate'])AND($_POST['edate'])!=null)
                {
                    if(isset($_POST['cvv'])AND($_POST['cvv'])!=null)
                    {
                        if(isset($_POST['cowner'])AND($_POST['cowner'])!=null)
                          {

                        $cnumber=trim($_POST['cnumber']);
                        $edate=trim($_POST['edate']);
                        $cvv=trim($_POST['cvv']);
                        $cowner=trim($_POST['cowner']);
                        $obj->returnpaymentinsert($cnumber, $edate ,$cvv,$cowner,$amt,$key,$amt,$log,$ckey);
                    }
                    else
                    echo"<script> alert('cnumber is empty')</script>";
                }
                else
                echo"<script> alert('edate is empty')</script>";
            }
            else
            echo"<script> alert('cvv is empty')</script>";
        }
        else
        echo"<script> alert('cowner is empty')</script>";
    }

  
$smartyObj->display('payment.tpl');
}
else
{	
	Header("location:login.php");
}
?>