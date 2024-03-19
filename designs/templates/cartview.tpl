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
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card border-0 shadow-sm">
        <a href="productdetails.php?key={$d.productkey}" class="text-decoration-none text-dark">
          <center> <img src="images/{$d.productkey}/{$d.image}" class="rounded" height="225px" width="160px"><br></center>          <div class="card-body">
            <h5 class="card-title mb-0">{$d.name}</h5>
            <p class="card-text text-muted">Category: {$d.category}</p>
            <p class="card-text">Rent Amount: <span class="text-warning">{$d.rentamt} Rs</span></p>
            <p class="card-text">Amount: <span class="text-warning">{$d.amount} Rs</span></p>
          </div>
        </a>
        <div class="card-footer bg-transparent border-0 text-center">
          {if $d.selling=='Rent'}
          <a href="productrent.php?key={$d.productkey}&amp;amt={$d.rentamt}" class="btn btn-warning btn-sm rent">Rent</a>
          {elseif $d.selling=='Sell'}
          <a href="productbuy.php?key={$d.productkey}&amp;amt={$d.amount}&amp;log={$d.loginid}" class="btn btn-warning btn-sm buy">Buy</a>
          {else}
          <a href="productbuy.php?key={$d.productkey}&amp;amt={$d.amount}&amp;log={$d.loginid}" class="btn btn-warning btn-sm buy">Buy</a>
          <a href="productrent.php?key={$d.productkey}&amp;amt={$d.rentamt}&amp;log={$d.loginid}" class="btn btn-warning btn-sm rent">Rent</a>
          {/if}
          <a href="cart.php?key={$d.productkey}&amp;amt={$d.rentamt}&amp;log={$d.loginid}&amp;tamt={$d.amount}" class="btn btn-warning btn-sm cart">Add To Cart</a>
          <a href="customerofferview.php?key={$d.productkey}&amp;log={$d.loginid}&amp;okey={$d.offkey}" class="btn btn-warning btn-sm offer">Offers</a>
        </div>
      </div>
    </div>
    {/foreach}
  </div>
</div>


       {/if} 
       </body></html>