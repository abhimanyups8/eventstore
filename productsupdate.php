<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
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
                            if(isset($_POST['selling'])AND($_POST['selling'])!=null)
                             {
                            $category=trim($_POST['category']);

                        $name=trim($_POST['name']);
                        $details=trim($_POST['details']);
                        $rent=trim($_POST['rentamt']);
                        $amount=trim($_POST['amount']);
                        $selling=trim($_POST['selling']);
                 $obj->pinsert($category,$name,$_FILES['image'], $details,$rent,$amount,$selling,$key);
                    
                }
                else
                echo"<script> alert('selling option is empty')</script>";
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
$smartyObj->display('productsupdate.tpl');
$smartyObj->display('shopfooter.tpl');

}
else
{	
	Header("location:login.php");
}
?>
