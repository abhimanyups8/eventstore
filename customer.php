<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
    if(isset($_POST['name'])AND($_POST['name'])!=null)
    {
        if (preg_match('/^[A-Z a-z]*$/', $_POST['name']))
				{
        if(isset($_POST['address'])AND($_POST['address'])!=null)
        {
            if(isset($_POST['contact'])AND($_POST['contact'])!=null)
        {
            if (preg_match('/^[0-9]*$/', $_POST['contact']))	
			  {  
				 $nm1=strlen($_POST['contact']);
				 if($nm1>=10 and $nm1<=12)
				{

           if(isset($_POST['email'])AND($_POST['email'])!=null)
                {
                    if(isset($_POST['password'])AND($_POST['password'])!=null)
                    {
                        $customername=trim($_POST['name']);
                        $address=trim($_POST['address']);
                        $contact=trim($_POST['contact']);
                        $email=trim($_POST['email']);
                        $password=trim($_POST['password']);
                        $obj->cinsert($customername,$address,$contact,$email,$password);
                    }
                                           
                    else
                    echo"<script> alert('Password is empty')</script>";
                }
                else
                echo"<script> alert('Email is empty')</script>";
            }	
            else
            echo "<script> alert('Phone number should be 10 digit or 12 digit')</script>";	
    }
    else
        echo "<script> alert('Please enter numbers for phone number')</script>";
            }
            else
            echo"<script> alert('contact is empty')</script>";
                                 
          
        }
        else
        echo"<script> alert('Address is empty')</script>";
    }
    else
        echo "<script> alert('Please enter alphabets for last name') </script>";	
    }
    else
    echo"<script> alert('Name is empty')</script>";
}
$smartyObj->display('registerheader.tpl');
$smartyObj->display('customerreg.tpl');
$smartyObj->display('customerfooter.tpl');


?>
