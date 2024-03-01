<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">

</head>
<body>
   



<!-- </table>
    {if $view!=null}
    <tr>
        <center>
    <table class="table table-striped table-hover">
        <th>Image</th>
        <th>Category</th>
    <th>Name</th>
    <th>Details</th> 
    <th>Rent amt</th>
    <th>Amount</th>
    <th>Total amount</th>
    
    
    </tr>
    {foreach from=$view item="d"}
    <tr>
    <td><img src="images/{$d.productkey}/{$d.image}" height="200px" width="150px"></td>
    <td>{$d.category}</td>
    <td>{$d.name}</td>
    <td>{$d.details}</td> 
    <td>{$d.rentamt}</td>
    <td>{$d.amount}</td>
        <td>{$d.totalamount}</td>

    {if $d.selling=='Rent'}
    <td><a href="productrent.php?key={$d.productkey}&&amt={$d.rentamt}" class="btn btn-warning">Rent</a></td>
    {elseif $d.selling=='Sell'}
    <td><a href="productbuy.php?key={$d.productkey}&&amt={$d.amount}&&log={$d.loginid}" class="btn btn-warning">Buy</a></td>
    {else}
    <td><a href="productbuy.php?key={$d.productkey}&&amt={$d.amount}&&log={$d.loginid}" class="btn btn-warning">Buy</a></td>
    <td><a href="productrent.php?key={$d.productkey}&&amt={$d.rentamt}&&log={$d.loginid}" class="btn btn-warning">Rent</a></td>

    {/if}
    <td><a href="cartdelete.php?key={$d.cartkey}" class="btn btn-warning">Remove from Cart</a></td>


    
    </tr>

    
     
    {/foreach}
    </table>
    
    Total Amount={$data}
    <td><a href="payment.php?key={$d.productkey}&&am={$data}&&log={$d.loginid}" class="btn btn-warning">Buy All</a></td>
 -->
 <div class="container">
    <div class="row">
      {foreach from=$view item="d"}
          <div class="cad col-lg-3 col-md-4 col-sm-6 product-preview" style="border: 1px solid black;">
        <a href="productdetails.php?key={$d.productkey}">
        <center><img src="images/{$d.productkey}/{$d.image}" class="rounded" height="200px" width="150px"><br></center>
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
         <br> <a href="cartdelete.php?key={$d.cartkey}" class="btn btn-warning remove">Remove from Cart</a>
        </div>
      </div>
      {/foreach}
    </div>
  </div>
       {/if} 
       </body></html>