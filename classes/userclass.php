<?php
class userclass
{
    function insert($name,$_file=NULL, $address,$pincode,$dist,$city,$contact,$registration,$email,$password){
        
        $enc=md5($password);
        $keyy=uniquekey("login","lkey");      
        $qrry="insert into login(lkey,email,password,status,usertype)values('".$keyy."','".$email."','".$enc."','1','1')";
        $condition2=mysql_query($qrry);
        $key=uniquekey("shop","eventkey");
        $id=keytoid("login","lkey",$keyy);
        $qry="insert into shop(eventkey,name,image,address,pincode,dist,city,contact,registration,loginid)values('".$key."','".$name."','".$_file['name']."','".$address."','".$pincode."','".$dist."','".$city."','".$contact."','".$registration."','".$id."')";
        $d="images/".$key;
        $condition1=mysql_query($qry);
        //echo $qry;exit;
        if($condition1&&$condition2)
        {
            mkdir($d);
            move_uploaded_file($_file['tmp_name'],$d."/".$_file['name']);
            echo "<script> alert('Registration succesfull')</script>";
        } 
        else{
            echo "<script> alert('Registration unsuccesfull')</script>";

        }
    }
    function cinsert($customername,$address,$contact,$email,$password){
        
        $enc=md5($password);
        $keyy=uniquekey("login","lkey");
        $qrry="insert into login(lkey,email,password,status,usertype)values('".$keyy."','".$email."','".$enc."','1','2')";
        $condition2=mysql_query($qrry);
        //echo $qrry;exit;
        $key=uniquekey("customer","ckey");
        $id=keytoid("login","lkey",$keyy);
        $qry="insert into customer(ckey,customername,address,contact,loginid)values('".$key."','".$customername."','".$address."','".$contact."','".$id."')";
        $condition1=mysql_query($qry);
        //echo $qry;exit;
        if($condition1&&$condition2)
        {
            
            echo "<script> alert('Registration succesfull')</script>";
        } 
        else{
            echo "<script> alert('Registration unsuccesfull')</script>";

        }
    }
    function adminshopview(){
        $qry="select * from shop inner join login on login.id=shop.loginid";
        $erc=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($erc)){
            $arr[]=$rr;       
         }
            return $arr;
    }
    function admincustomerview(){
        $qry="select * from customer inner join login on login.id=customer.loginid";
        $erc=mysql_query($qry);
        $arr=array();
        while($rr=mysql_fetch_array($erc)){
            $arr[]=$rr;       
         }
            return $arr;
    }
    function rejected($hai)
    {
    $id1=keytoid("login", "lkey", $hai); 
    $qry="update login set status='2' where id='".$id1."'"; 
    $p=mysql_query($qry);
    if($p)
    {
    echo "<script>alert('Rejected successfully'); 
    window.location.href='adminshopview.php'; </script>";
    }
    else{
     echo "<script>alert('Rejecting not successful');
      window.location.href='adminshopview.php'; </script>";}

}
function approvel($hai)
{
$id1=keytoid("login", "lkey", $hai);
$qry="update login set status='1' where id='".$id1."'";
 $p=mysql_query($qry);
if($p)
{
echo"<script>alert('Approved successfully'); 
window.location.href='adminshopview.php'; 
</script>";
}
else
{
echo "<script>alert('Approve is not successful'); 
window.location.href='adminshopview.php'; </script>";
}
 }
 function login($email,$password)
    {  $enc=md5($password);
        $qry="select lkey,usertype,status from login where email='".$email."' and password='".$enc."'";
        $erc=mysql_query($qry);
        $key=null;
        $c=0;
        while($rr=mysql_fetch_array($erc))
        {
            $key=$rr['lkey'];
            $x=$rr['usertype'];
            $s=$rr['status'];
            $c++;
        }
        if($c>0)
        {
            setcookie("lkey",$key);
            setcookie("logined",1);
            if($s==1)
            {
                if($x==0)
                {
            header("location:admin.php");
                }
                elseif($x==1)
                {
                    header("location:shophome.php");
                        }
                        elseif($x==2)
                        {
                            header("location:customerhome.php");
                                }
                                elseif($x==3)
                                {
                                    header("location:deliveryhome.php");
                                        }}  
                                     
        else{
            echo "<script> alert('invalid data')
            </script>";
        }
    }
    
}
function editing($key){
    $id=keytoid("login","lkey",$key);
    $qry="select * from shop inner join login on login.id=shop.loginid where shop.loginid='".$id."'";
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}
function edit_data($name,$address,$pincode,$dist,$city,$contact,$registration,$email,$key){
    $id=keytoid("login","lkey",$key);
    $query="update login set email='".$email."' where id='".$id."'";
    $exee=mysql_query($query);
    $qry="update shop set name='".$name."',address='".$address."',pincode='".$pincode."',dist='".$dist."',city='".$city."' ,contact='".$contact."',registration='".$registration."' where loginid='".$id."'";
    $erc=mysql_query($qry);
    if($erc && $exee)
    {
        echo "<script> alert ('updated');
        window.location.href='shopupdate.php';
        </script>";

    }
    else
    {
        echo "<script>alert('updation not successfull');
        window.location.href='shopupdate.php';
        </script>"; }
}
function cediting($key){
    $id=keytoid("login","lkey",$key);
    $qry="select * from customer inner join login on login.id=customer.loginid where customer.loginid='".$id."'";
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
    }

function cedit_data($customername,$address,$contact,$email,$key){
    $id=keytoid("login","lkey",$key);
    $query="update login set email='".$email."' where id='".$id."'";
    $exee=mysql_query($query);
    $qry="update customer set customername='".$customername."',address='".$address."' ,contact='".$contact."' where loginid='".$id."'";
    $erc=mysql_query($qry);
    if($erc && $exee)
    {
        echo "<script> alert ('updated');
        window.location.href='customerupdate.php';
        </script>";

    }
    else
    {
        echo "<script>alert('updation not successfull');
        window.location.href='customerupdate.php';
        </script>";

    }


}
function viewshop($a)
{
$query="select * from shop where pincode='".$a."'OR dist='" .$a."'OR city='".$a."'OR contact='".$a."'OR name='".$a."'";
//echo $query;exit; 
$enx=mysql_query($query);
 $ar=array();
 while($x=mysql_fetch_array($enx)){
$ar[]=$x;
} 
if($ar!=null)
return $ar;
else
return 1;
}
 function pinsert($category,$name,$_file=NULL, $details,$rent,$amount,$selling,$key){
    $id=keytoid("login","lkey",$key);
        $keyy=uniquekey("product","productkey");      
        $qrry="insert into product(productkey,category,name,image,details,rentamt,amount,selling,loginid)values('".$keyy."','".$category."','".$name."','".$_file['name']."','".$details."','".$rent."','".$amount."','".$selling."','".$id."')";
        $condition2=mysql_query($qrry);
        $d="images/".$keyy;
      
        //echo $qrry;exit;
        if($condition2)
        {
            mkdir($d);
            move_uploaded_file($_file['tmp_name'],$d."/".$_file['name']);
            echo "<script> alert('Registration succesfull')</script>";
        } 
        else{
            echo "<script> alert('Registration unsuccesfull')</script>";

        }
    

 }
 function selection($key){
    $id=keytoid("login","lkey",$key);
    $qry="select * from product where loginid='".$id."'";
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}
function pediting($keyy){
    $id=keytoid("product","productkey",$keyy);
    $qry="select * from product where productkey='".$keyy."'";
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}
function pedit_data($category,$name,$details,$rent,$amount,$keyy){
    $qry="update product set category='".$category."',name='".$name."',details='".$details."',rentamt='".$rent."',amount='".$amount."' where productkey='".$keyy."'";
    $erc=mysql_query($qry);
    if($erc)
    {
        echo "<script> alert ('updated');
        window.location.href='productview.php';
        </script>";

    }
    else
    {
        echo "<script>alert('updation not successfull');
        window.location.href='productview.php';
        </script>";

    }
    }
    function deletion($key)
    {
    $qry="delete from product where productkey='".$key."'";
    $erc=mysql_query($qry);
    if($erc){
        echo "<script> alert('Deleted');
        window.location.href='productview.php';
        </script>";
    }
    else{
        echo "<script> alert('Not Deleted');
        window.location.href='productview.php';
        </script>";

    }
}

function search($a)
{
    $qry="select * from product where category='".$a."' OR name='".$a."'";
    $enx=mysql_query($qry);
    $ar=array();
    while($x=mysql_fetch_array($enx)){
   $ar[]=$x;
   } 
   if($ar!=null)
   return $ar;
   else
   return 1;
}

function rentp($days,$address,$quantity,$id,$key,$amt){
    $id1=keytoid("product","productkey",$id);
    $id2=keytoid("login","lkey",$key);
    $key=uniquekey("rentdtl","rentkey");
    $date=date('Y-m-d');
    $p=$amt*$quantity*$days;
    $qry="insert into rentdtl(rentkey,days,address,quantity,productid,currentdate,loginid,amount)values('".$key."','".$days."','".$address."','".$quantity."','".$id1."','".$date."','".$id2."','".$p."')";
    $condition1=mysql_query($qry);
    if($condition1)
    {
        
        echo "<script> alert('Rent added succesfull')</script>";
    } 
    else{
        echo "<script> alert('Rent added unsuccesfull')</script>";

    }
}

function buyp($quantity,$id,$key,$amt,$log){
    $id1=keytoid("product","productkey",$id);
    $id2=keytoid("login","lkey",$key);
    $key=uniquekey("rentdtl","rentkey");
    $date=date('Y-m-d');
    $p=$amt*$quantity;
    $qry="insert into rentdtl(rentkey,quantity,productid,currentdate,loginid,amount)values('".$key."','".$quantity."','".$id1."','".$date."','".$id2."','".$p."')";
    $condition1=mysql_query($qry);
    if($condition1)
    {
        
        echo "<script> alert(' added succesfull')
        window.location.href='payment.php?key={$id}&&am={$p}&&log={$log}'</script>";
    } 
    else{
        echo "<script> alert(' adding unsuccesfull')
        window.location.href='productbuy.php?key={$id}&&am={$p}&&log={$log}'</script>";

    }
}
function addtocart($key,$a,$totamt)
{
    $id1=keytoid("login","lkey",$a);
    $id=keytoid("product","productkey",$key);
    $key1=uniquekey("cart","cartkey");
    $date=date('Y-m-d');
    $qry="insert into cart(cartkey,loginid,menuid,currentdate,totalamount)values('".$key1."','".$id1."','".$id."','".$date."','".$totamt."')";
   // echo $qry;exit;
    $exc=mysql_query($qry);
    if($exc)
    {
        echo "<script>alert('added Successfull');window.location.href='productsearch.php';</script>";
    }
    else
    {
        echo "<script>alert('added UnSuccessfull');window.location.href='productsearch.php';</script>";
    }
}
function cartselection($key){
    $id=keytoid("login","lkey",$key);
    $qry="select * from cart inner join product on product.id=cart.menuid where cart.loginid='".$id."' and cart.paymentstatus = 0";
    //echo $qry;exit;
    $erc=mysql_query($qry);
   
    $arr=array();
while($rr=mysql_fetch_array($erc)){
    $arr[]=$rr;       
 }
    return $arr;

}
function totalamountview($key){
    $id=keytoid("login","lkey",$key);
    $qrry="SELECT SUM(totalamount) FROM cart where loginid='".$id."'";
    $errc=mysql_query($qrry);
 //echo $qrry;exit;
 $am=0;
 while($ll=mysql_fetch_array($errc)){
    $am=$ll['SUM(totalamount)'];       
 }
 return $am;
 echo $am;exit;



}
    
function cartdeletion($key)
{
    $id=keytoid("cart","cartkey",$key);

    $qry="delete from cart where id='".$id."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    if($erc){
        echo "<script> alert('Deleted');
        window.location.href='cartview.php';
        </script>";
    }
    else{
        echo "<script> alert('Not Deleted');
        window.location.href='cartview.php';
        </script>";

    }
}

function ordersview($key) 
{
    $id = keytoid("login", "lkey", $key);
    $qry = "select * FROM cart inner join product ON product.id=cart.menuid inner join customer on customer.loginid=cart.loginid WHERE product.loginid='".$id."' and cart.paymentstatus = 1";
    //echo $qry;exit;
    $erc = mysql_query($qry);
    $arr = array();
    while ($rr = mysql_fetch_array($erc)) {
        $arr[] = $rr;
    } return $arr;
}
function carttotalamount($key){
    $id=keytoid("login","lkey",$key);
    $qry="select * from cart inner join product on product.id=cart.menuid where product.loginid='".$id."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;

    }

    

   function paymentinsert($cnumber, $edate ,$cvv,$cowner,$amt,$key,$amt,$log,$ckey){
    //echo$key;exit;
    $qrry="select tamount from bank where cvv='".$cvv."' AND cardno='".$cnumber."' ";
    $condition2=mysql_query($qrry);
    $que="select contact from shop where loginid='".$log."'";
    $condition4=mysql_query($que);
   // echo $que;exit;
   $contact=NULL;
    while($pp=mysql_fetch_array($condition4)){
        $contact=$pp['contact'];

    }
// echo $contact;exit;

    $query1="select tamount from bank where contactno='".$contact."'";
    $condition5=mysql_query($query1);
    while($ll=mysql_fetch_array($condition5)){
        $tam=$ll['tamount'];
    }
    $namt=$tam+$amt;
   //echo $query1;exit;

    while($rr=mysql_fetch_array($condition2)){
        $am=$rr['tamount'];
    
    }
     $a=$am-$amt;
     $qrryy="update  bank set tamount='".$a."' where cvv='".$cvv."' AND cardno='".$cnumber."' ";
            //echo $qrryy;exit;
            $query2="update  bank set tamount='".$namt."' where contactno='".$contact."' ";
            $condition6=mysql_query($query2);
     $condition3=mysql_query($qrryy);
        $key=keytoid("login","lkey",$key);

        $key1=uniquekey("payment","pykey");
        $cdate=date('Y-m-d');
        $qry="insert into payment(pykey,card,edate,cvv,cowner,cdate,loginid,amount)values('".$key1."','".$cnumber."','".$edate."','".$cvv."','".$cowner."','".$cdate."','".$key."','".$amt."')";
        //echo $qry;exit;
        $condition1=mysql_query($qry);
        $querry="update cart set paymentstatus='1' where cartkey='".$ckey."'";
       // echo$querry;exit;
 $p=mysql_query($querry);
        if($condition1&&$condition3&&$condition6)
        {
            
            echo "<script> alert('payment succesfull');
            window.location.href='productsearch.php'
           </script>";
          


        } 
        else{
            echo "<script> alert(' unsuccesfull')</script>";

        }

   }


function buyproduct($quantity,$productkey,$loginkey,$amt,$log) {
    $loginid=keytoid("login","lkey",$loginkey);
    $productid=keytoid("product","productkey",$productkey);
    $totalamount =  $quantity * $amt;
    $key1=uniquekey("cart","cartkey");
    $date= date('Y-m-d');
    $qry="insert into cart(cartkey,loginid,menuid,currentdate,quantity,totalamount)values
    ('".$key1."','".$loginid."','".$productid."','".$date."','".$quantity."','".$totalamount."')";
    $condition1=mysql_query($qry);
    if($condition1)
    {
        
        echo "<script> alert('Redirect to payment');
        window.location.href='payment.php?key={$productid}&&am={$totalamount}&&log={$log}&&ckey={$key1}'</script>";
    } 
    else{
        echo "<script> alert('Something went wrong');
        window.location.href='productbuy.php?key={$id}&&am={$p}&&log={$log}&&ckey={$key1}'</script>";

    }

}
function paidordersview($key) 
{
    $id = keytoid("login", "lkey", $key);
    $qry = "select * FROM cart inner join product ON product.id=cart.menuid inner join customer on customer.loginid=cart.loginid WHERE cart.loginid='".$id."'AND cart.paymentstatus = 1";
    //echo $qry;exit;
    $erc = mysql_query($qry);
    $arr = array();
    while ($rr = mysql_fetch_array($erc)) {
        $arr[] = $rr;
    } return $arr;
}
function feedinsert($feedback,$id1,$key){
    $loginid=keytoid("login","lkey",$id1);
    $productid=keytoid("product","productkey",$key);
    $date= date('Y-m-d');
    $key1=uniquekey("feedback","feedkey");

    $qry="insert into feedback(feedkey,feedback,productid,loginid,currentdate)values
    ('".$key1."','".$feedback."','".$productid."','".$loginid."','".$date."')";

 //echo $qry;exit;
    $condition1=mysql_query($qry);
    if($condition1)
    {
        
        echo "<script> alert('Feedback Submitted Successfully');
        window.location.href='paidordersview.php';
      </script>";
    } 
    else{
        echo "<script> alert('Something went wrong');
        </script>";

    }


}
function feedbackshopview($key) 
{
    $productid=keytoid("product","productkey",$key);
    $qry="select * from feedback inner join product on product.id=feedback.productid inner join customer on customer.loginid=feedback.loginid where feedback.productid='".$productid."'";
   //echo $qry;exit;
    $erc = mysql_query($qry);
    $arr = array();
    while ($rr = mysql_fetch_array($erc)) {
        $arr[] = $rr;
    } return $arr;
}
function offersinsert($offers,$days,$id1,$key){
    $loginid=keytoid("login","lkey",$id1);
    $productid=keytoid("product","productkey",$key);
    $date= date('Y-m-d');
    $key1=uniquekey("feedback","feedkey");

    $qry="insert into offers(offkey,offers,productid,loginid,currentdate,offerlimit)values
    ('".$key1."','".$offers."','".$productid."','".$loginid."','".$date."','".$days."')";

 //echo $qry;exit;
    $condition1=mysql_query($qry);
    if($condition1)
    {
        
        echo "<script> alert('Offer Submitted Successfully');
      </script>";
    } 
    else{
        echo "<script> alert('Something went wrong');
        </script>";

    }


}
function offersview($key){
    $qry="select * from product inner join offers on product.id=offers.productid where product.productkey='".$key."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}
function offereditview($key,$id){
    $id1=keytoid("offers","offkey",$id);
    
    $qry="select * from offers where id='".$id1."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}


function offersedit($offers,$days,$id){
    $id1=keytoid("offers","offkey",$id);
    //echo $id;exit;
    $qry="update offers set offers='".$offers."',offerlimit='".$days."' where id='".$id1."'";
   // echo $qry;exit;
    $erc=mysql_query($qry);
    if($erc )
    {
        echo "<script> alert ('updated');
        window.location.href='productview.php';
    
        </script>";

    }
    else
    {
        echo "<script>alert('updation not successfull');
        window.location.href='productview.php';
        </script>"; }
}
function offersdeletion($key)
{
$qry="delete from offers where offkey='".$key."'";
$erc=mysql_query($qry);
if($erc){
    echo "<script> alert('Deleted');
    window.location.href='productview.php';
    </script>";
}
else{
    echo "<script> alert('Not Deleted');
    window.location.href='productview.php';
    </script>";

}
}
function customeroffersview($key){
    $qry="select * from product inner join offers on product.id=offers.productid where product.productkey='".$key."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}
function delinsert($name, $address,$pincode,$dist,$city,$contact,$email,$password){
        
    $enc=md5($password);
    $keyy=uniquekey("login","lkey");      
    $qrry="insert into login(lkey,email,password,status,usertype)values('".$keyy."','".$email."','".$enc."','1','3')";
    $condition2=mysql_query($qrry);
    $key=uniquekey("deliveryboy","delkey");
    $id=keytoid("login","lkey",$keyy);
    $qry="insert into deliveryboy(delkey,delname,address,pincode,district,city,contactno,loginid)values('".$key."','".$name."','".$address."','".$pincode."','".$dist."','".$city."','".$contact."','".$id."')";
    $condition1=mysql_query($qry);
   //echo $qry;exit;
    if($condition1&&$condition2)
    {
        
        echo "<script> alert('Registration succesfull')</script>";
    } 
    else{
        echo "<script> alert('Registration unsuccesfull')</script>";

    }
}
function delediting($key){
    $id=keytoid("login","lkey",$key);
    $qry="select * from deliveryboy inner join login on login.id=deliveryboy.loginid where deliveryboy.loginid='".$id."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}
function deleditdata($name, $address,$pincode,$dist,$city,$contact,$email,$key){
    $id=keytoid("login","lkey",$key);
    $query="update login set email='".$email."' where id='".$id."'";
    $exee=mysql_query($query);
    $qry="update deliveryboy set delname='".$name."',address='".$address."',pincode='".$pincode."',district='".$dist."',city='".$city."' ,contactno='".$contact."' where loginid='".$id."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    if($erc && $exee)
    {
        echo "<script> alert ('updated');
        window.location.href='deledit.php';
        </script>";

    }
    else
    {
        echo "<script>alert('updation not successfull');
        window.location.href='deledit.php';
        </script>"; }
}
function deliveryshopview($key){
    $id=keytoid("login","lkey",$key);
    $qry="select * from deliveryboy inner join login on login.id=deliveryboy.loginid";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}

function assigndeliveryboys($cartid,$log){
    $key1=uniquekey("assigndelboys","assignkey"); 
    $date= date('Y-m-d');
    $id=keytoid("cart","cartkey",$cartid);

    $qry="insert into  assigndelboys(assignkey,cartid,loginid,currentdate)values
    ('".$key1."','".$id."','".$log."','".$date."')";

    //echo $qry;exit;
    $condition1=mysql_query($qry);
    if($condition1)
    {
        
        echo "<script> alert('Assigned  Successfully');
        window.location.href='orders.php';
      </script>";
    } 
    else{
        echo "<script> alert('Something went wrong');
        window.location.href='deliveryshopview.php';
        </script>";

    }


}
function deliveryordersview($key){ 
    $id=keytoid("login","lkey",$key);
    $qry = "select * FROM cart inner join product ON product.id=cart.menuid inner join customer on customer.loginid=cart.loginid inner join assigndelboys on assigndelboys.cartid=cart.id WHERE assigndelboys.loginid='".$id."' and cart.paymentstatus = 1";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}
function assignedboysview($key){ 
    $id1=keytoid("cart","cartkey",$key);

    $qry = "select * FROM cart inner join assigndelboys on assigndelboys.cartid=cart.id inner join deliveryboy on deliveryboy.loginid=assigndelboys.loginid where assigndelboys.cartid='".$id1."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}
function delboysdeletion($key)
{

$qry="delete from assigndelboys where assignkey='".$key."'";
//echo $qry;exit;
$erc=mysql_query($qry);
if($erc){
    echo "<script> alert('Deleted');
    window.location.href='orders.php';
    </script>";
}
else{
    echo "<script> alert('Not Deleted');
    window.location.href='orders.php';
    </script>";

}
}
function delstatusupdate($key){
    $qry="update cart set delstatus='1' where cartkey='".$key."'"; 
    //echo $qry;exit;
    $p=mysql_query($qry);
    if($p)
    {
    echo "<script>alert('Reported successfully'); 
    window.location.href='delorderview.php'; </script>";
    }
    else{
     echo "<script>alert('Reporting not successful');
      window.location.href='delorderview.php'; </script>";}


}
function reasoninsert($reason,$id1,$key)
{
    $loginid=keytoid("login","lkey",$id1);
    $cartid=keytoid("cart","cartkey",$key);
    $date= date('Y-m-d');
    $key1=uniquekey("product_return","returnkey");

    $qry="insert into product_return(returnkey,reason,cartid,loginid,date)values
    ('".$key1."','".$reason."','".$cartid."','".$loginid."','".$date."')";

  //echo $qry;exit;
    $condition1=mysql_query($qry);
    if($condition1)
    {
        
        echo "<script> alert('Return Request Submitted Successfully');
        window.location.href='paidordersview.php'
      </script>";
    } 
    else{
        echo "<script> alert('Something went wrong');
        </script>";

    }





}
function returnshopview($key) 
{
    $cartid=keytoid("cart","cartkey",$key);
    $qry="select * from product_return inner join cart on cart.id=product_return.cartid inner join customer on customer.loginid=cart.loginid where product_return.cartid='".$cartid."'";
   //echo $qry;exit;
    $erc = mysql_query($qry);
    $arr = array();
    while ($rr = mysql_fetch_array($erc)) {
        $arr[] = $rr;
    } return $arr;
}
function acceptreturn($key){
    $qry="update cart set returnstatus='1' where cartkey='".$key."'"; 
    //echo $qry;exit;
    $p=mysql_query($qry);
    if($p)
    {
    echo "<script>alert('Accepted successfully');
    window.location.href='oredrs.php'; 
    </script>";
    }
    else{
     echo "<script>alert('Accepting not successful');
     window.location.href='orders.php'; 

     </script>";}

}
function returnpaymentinsert($cnumber, $edate ,$cvv,$cowner,$amt,$key,$amt,$log,$ckey){
    //echo$key;exit;
    $qrry="select tamount from bank where cvv='".$cvv."' AND cardno='".$cnumber."' ";
    $condition2=mysql_query($qrry);
    $que="select contact from customer where loginid='".$log."'";
    $condition4=mysql_query($que);
    //echo $que;exit;
   $contact=NULL;
    while($pp=mysql_fetch_array($condition4)){
        $contact=$pp['contact'];

    }
   //echo $contact;exit;

    $query1="select tamount from bank where contactno='".$contact."'";
   // echo $query1;exit;

    $condition5=mysql_query($query1);
    while($ll=mysql_fetch_array($condition5)){
        $tam=$ll['tamount'];
    }
    $namt=$tam+$amt;
  // echo $namt;exit;

    while($rr=mysql_fetch_array($condition2)){
        $am=$rr['tamount'];
    
    }
     $a=$am-$amt;
     $qrryy="update  bank set tamount='".$a."' where cvv='".$cvv."' AND cardno='".$cnumber."' ";
            //echo $qrryy;exit;
            $query2="update  bank set tamount='".$namt."' where contactno='".$contact."' ";
            $condition6=mysql_query($query2);
     $condition3=mysql_query($qrryy);
        $key=keytoid("login","lkey",$key);

        $key1=uniquekey("payment","pykey");
        $cdate=date('Y-m-d');
        $qry="insert into payment(pykey,card,edate,cvv,cowner,cdate,loginid,amount)values('".$key1."','".$cnumber."','".$edate."','".$cvv."','".$cowner."','".$cdate."','".$key."','".$amt."')";
        //echo $qry;exit;
        $condition1=mysql_query($qry);
       // echo$querry;exit;
        if($condition1&&$condition3&&$condition6)
        {
            
            echo "<script> alert('payment succesfull');
            window.location.href='orders.php';</script>";
          


        } 
        else{
            echo "<script> alert(' unsuccesfull')
            window.location.href='orders.php';</script>";
            

        }

   }
   function complaintinsert($complaints,$id1,$product){
    $loginid=keytoid("login","lkey",$id1);
    $productid=keytoid("product","productkey",$product);
    //echo $product;exit;
    $date= date('Y-m-d');
    $key1=uniquekey("complaints","compkey");

    $qry="insert into complaints(compkey,complaint,productid,loginid,currentdate)values
    ('".$key1."','".$complaints."','".$productid."','".$loginid."','".$date."')";

   //echo $qry;exit;
    $condition1=mysql_query($qry);
    if($condition1)
    {
        
        echo "<script> alert('Complaint Submitted Successfully');
        window.location.href='paidordersview.php'
      </script>";
    } 
    else{
        echo "<script> alert('Something went wrong');
        </script>";

    }


}
function complaintsview() 
{
    $qry="select * from complaints inner join product on product.id=complaints.productid inner join customer on customer.loginid=complaints.loginid";
   //echo $qry;exit;
    $erc = mysql_query($qry);
    $arr = array();
    while ($rr = mysql_fetch_array($erc)) {
        $arr[] = $rr;
    } return $arr;
}
function replyinsert($reply,$key){
    $id=keytoid("product","productkey",$key);
    $qry="update complaints set adreply='".$reply."' where productid='".$id."'";
//echo $qry;exit;
    $erc=mysql_query($qry);
    if($erc)
    {
        echo "<script> alert ('updated');
        window.location.href='complaintview.php';
        </script>";

    }
    else
    {
        echo "<script>alert('updation not successfull');
        window.location.href='complaintview.php';
        </script>"; }
}
function replyview($key) 
{
    $loginid=keytoid("login","lkey",$key);
    $qry="select * from complaints inner join product on product.id=complaints.productid inner join customer on customer.loginid=complaints.loginid where complaints.loginid='".$loginid."'";
   //echo $qry;exit;
    $erc = mysql_query($qry);
    $arr = array();
    while ($rr = mysql_fetch_array($erc)) {
        $arr[] = $rr;
    } return $arr;
}
function complaintseditview($key){
    $id1=keytoid("complaints","compkey",$key);
    
    $qry="select * from complaints where id='".$id1."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}


function complaintsedit($complaint,$id){
    $id1=keytoid("product","productkey",$id);
    //echo $id;exit;
    $qry="update complaints set complaint='".$complaint."' where productid='".$id1."'";
   //echo $qry;exit;
    $erc=mysql_query($qry);
    if($erc )
    {
        echo "<script> alert ('updated');
        window.location.href='complaintcustview.php';
    
        </script>";

    }
    else
    {
        echo "<script>alert('updation not successfull');
        window.location.href='complaintcustview.php';
        </script>"; }
}
function complaintdeletion($id)
    {
        $id1=keytoid("product","productkey",$id);
    $qry="delete from complaints where productid='".$id1."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
    if($erc){
        echo "<script> alert('Deleted');
        window.location.href='replyview.php';
        </script>";
    }
    else{
        echo "<script> alert('Not Deleted');
        window.location.href='replyview.php';
        </script>";

    }
}
function shopdetails($key){
    // $id=keytoid("shop","eventkey",$key);
    //echo $id;exit;
    $qry="select * from shop where loginid='".$key."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
   
    $arr=array();
while($rr=mysql_fetch_array($erc)){
    $arr[]=$rr;       
 }
    return $arr;

}
function shopproducts($id1){
    // $id=keytoid("login","lkey",$id1);
    //echo $id;exit;
    $qry="select * from product where loginid='".$id1."'";
    //echo $qry;exit;
    $erc=mysql_query($qry);
   
    $arr=array();
while($rr=mysql_fetch_array($erc)){
    $arr[]=$rr;       
 }
    return $arr;

}
function detailsselection($key){
    $id=keytoid("product","productkey",$key);
    $qry="select * from product where id='".$id."'";
    
//  echo $qry;exit;
    $erc=mysql_query($qry);
    $arr=array();
    while($rr=mysql_fetch_array($erc)){
        $arr[]=$rr;       
     }
        return $arr;
}
function adminfeedview() 
{
    $qry="select * from feedback inner join product on product.id=feedback.productid inner join customer on customer.loginid=feedback.loginid ";
   //echo $qry;exit;
    $erc = mysql_query($qry);
    $arr = array();
    while ($rr = mysql_fetch_array($erc)) {
        $arr[] = $rr;
    } return $arr;
}
function admindelview()
{
    $qry="select * from deliveryboy";
   //echo $qry;exit;
    $erc = mysql_query($qry);
    $arr = array();
    while ($rr = mysql_fetch_array($erc)) {
        $arr[] = $rr;
    } return $arr;
}
}

?>