<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";           
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$keyy=$_GET['key'];
$s=$obj->pediting($keyy);
$smartyObj->assign("data",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
    if(isset($_POST['category'])AND($_POST['category'])!=null)
    {
      
        if(isset($_POST['name'])AND($_POST['name'])!=null)
        {
            
                if(isset($_POST['details'])AND($_POST['details'])!=null)
                {
                    if(isset($_POST['rentamt'])AND($_POST['rentamt'])!=null)
                    {
                        if(isset($_POST['amount'])AND($_POST['amount'])!=null)
                          {
                            $category=trim($_POST['category']);

                        $name=trim($_POST['name']);
                        $details=trim($_POST['details']);
                        $rent=trim($_POST['rentamt']);
                        $amount=trim($_POST['amount']);
                        $obj->pedit_data($category,$name,$details,$rent,$amount,$keyy);
                    }
                    else
                    echo"<script> alert('amount is empty')</script>";
                }
                else
                echo"<script> alert('rent/day is empty')</script>";
            }
            else
            echo"<script> alert('details is empty')</script>";
        }
        else
        echo"<script> alert('name is empty')</script>";
    }

    else
    echo"<script> alert('category is empty')</script>";
}
$smartyObj->display('shopheader.tpl');

$smartyObj->display('productdetailsedit.tpl');
$smartyObj->display('shopfooter.tpl');
}
else
{	
	Header("location:login.php");
}

?>