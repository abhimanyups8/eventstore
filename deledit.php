<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
session_start();
if(isset($_COOKIE['logined'])&& $_COOKIE['logined']==1)
{
$key=$_COOKIE['lkey'];
$s=$obj->delediting($key);
$smartyObj->assign("data",$s);
if(isset($_POST['hide'])AND($_POST['hide'])=='h')
{
    if(isset($_POST['delname'])AND($_POST['delname'])!=null)
    {
        if (preg_match('/^[A-Z a-z]*$/', $_POST['delname']))
        {
      
      
        if(isset($_POST['address'])AND($_POST['address'])!=null)
        {
            if(isset($_POST['pincode'])AND($_POST['pincode'])!=null)
            {
                if (preg_match('/^[0-9]*$/', $_POST['pincode']))
				{
                    $no=strlen($_POST['pincode']);
										if($no==6)
											{
                if(isset($_POST['district'])AND($_POST['district'])!=null)
                {
                    if(isset($_POST['city'])AND($_POST['city'])!=null)
                    {
                        if(isset($_POST['contactno'])AND($_POST['contactno'])!=null)
                          {
                            if (preg_match('/^[0-9]*$/', $_POST['contactno']))	
                            {  
                               $nm1=strlen($_POST['contactno']);
                               if($nm1>=10 and $nm1<=12)
                              {
                           
                           
                                if(isset($_POST['email'])AND($_POST['email'])!=null)
                                {
                                  
                        $name=trim($_POST['delname']);
                        $address=trim($_POST['address']);
                        $pincode=trim($_POST['pincode']);
                       $dist=trim($_POST['district']);
                        $city=trim($_POST['city']);
                        $contact=trim($_POST['contactno']);

                        $email=trim($_POST['email']);
                       

                      
                        $obj-> deleditdata($name, $address,$pincode,$dist,$city,$contact,$email,$key);
                    
                
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
                echo"<script> alert('contact number is empty')</script>";  
                
                }
                    else
                    echo"<script> alert('City is empty')</script>";
                }
                else
                echo"<script> alert('district is empty')</script>";
            }
            else
                    echo "<script> alert('pin number must contain 6 characters')</script>";
            }
            else
                echo "<script> alert('Please enter numbers for pincode')</script>";
            }
            else
            echo"<script> alert('pincode is empty')</script>";
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
$smartyObj->display('delheader.tpl');
$smartyObj->display('deledit.tpl');
$smartyObj->display('shopfooter.tpl');
}
else
{	
	Header("location:login.php");
}

?>
