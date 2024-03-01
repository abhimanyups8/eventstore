
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/button.css">

</head>
<body>
    <br><br><br><br><br><br>


 
{if $view!=null}
<tr>
<!-- <table  class="table table-hover table-striped">
    <th>Image</th>
<th>Shop Name</th>
<th>Shop address</th> 
<th>Pincode</th>
<th>District</th>
<th>City</th>
<th>Contact</th>
<th>Registration</th>

</tr>
{foreach from=$view item="d"}
<tr>
    <td><img src="images/{$d.eventkey}/{$d.image}" height="200px" width="150px"></td>
<td>{$d.name}</td>
<td>{$d.address}</td>
<td>{$d.pincode}</td>
<td>{$d.dist}</td> 
<td>{$d.city}</td>
<td>{$d.Contact}</td>
<td>{$d.registration}</td>

</tr>
{/foreach}
</table> -->

<div class="container" >
    

    <div class="row"  >
        {foreach from=$view item="d"}
        <div class="col-lg-3"  style=" border-right: 2px solid black; ">
            <img src="images/{$d.eventkey}/{$d.image}" height="200px" width="150px"><br>
           <br> <font color="orange">Shop Name:</font> {$d.name} <br>
            <font color="orange">City:</font> {$d.city}<br>
            <font color="orange">Contact:</font> {$d.contact} <br>


          
        

        </div>
    
        {/foreach}
    </div>

</div>
{/if}
<center><h1>Our Products</h1></center>
<div class="container-fluid">
    <div class="row justify-content-center">
      {foreach from=$data item="d"}
            <div class="cad col-lg-3 product-preview" style="border: 1px solid black;">
        <a href="productdetails.php?key={$d.productkey}">
          <center><img src="images/{$d.productkey}/{$d.image}" class="rounded" height="200px" width="150px"></center><br>
          <div class="text-center">
            <div>{$d.category}</div>
            <div>{$d.name}</div>
            <div><font color="orange">Rent Amount:</font> {$d.rentamt} Rs</div>
            <div><font color="orange">Amount:</font> {$d.amount} Rs</div>
          </div>
          {if $d.selling=='Rent'}
          <div class="text-center">
            <a href="productrent.php?key={$d.productkey}&&amt={$d.rentamt}" class="btn btn-warning rent">Rent<img src="images/img.gif" height="20px" width="20px"></a>
          </div>
          {elseif $d.selling=='Sell'}
          <div class="text-center">
            <a href="productbuy.php?key={$d.productkey}&&amt={$d.amount}&&log={$d.loginid}" class="btn btn-warning buy">Buy<img src="images/img.gif" height="20px" width="20px"></a>
          </div>
          {else}
          <div class="text-center">
            <a href="productbuy.php?key={$d.productkey}&&amt={$d.amount}&&log={$d.loginid}" class="btn btn-warning buy">Buy<img src="images/img.gif" height="20px" width="20px"></a>
            <a href="productrent.php?key={$d.productkey}&&amt={$d.rentamt}&&log={$d.loginid}" class="btn btn-warning rent">Rent<img src="images/img.gif" height="20px" width="20px"></a>
          </div>
          {/if}
          <div class="text-center">
            <a href="cart.php?key={$d.productkey}&&amt={$d.rentamt}&&log={$d.loginid}&&tamt={$d.amount}" class="btn btn-warning cart">Add To Cart<img src="images/addtocart1.gif" height="20px" width="20px"></a>
            <a href="customerofferview.php?key={$d.productkey}&&log={$d.loginid}&&okey={$d.offkey}" class="btn btn-warning offer">Offers<img src="images/offers.gif"></a>
          </div>
        
          
      </div>
      {/foreach}
    </div>
  </div>


</body></html>