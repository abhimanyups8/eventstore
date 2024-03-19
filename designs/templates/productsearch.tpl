<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
</head>
<body>
    <br><br><br><br><br><br>
<table align="center"> <form action="" method="POST">
<input type="hidden" name="hide" value="h">
<tr><td>Search Products</td><td><input type="text" name="search" class="form-control">
<td><input type="submit" value="Search" class="btn btn-success"></td></tr>
<table class="table table-striped table-hover">
</form>
</table>
    {if $view!=null}
    <!-- <tr>
        <center>
    <table class="table table-striped table-hover">
        <th>Image</th>
        <th>Category</th>
    <th>Name</th>
    <th>Details</th> 
    <th>Rent amt</th>
    <th>Amount</th>
    <th>Buying Option</th>
    
    
    </tr>
    {foreach from=$view item="d"}
    <tr>
    <td><img src="images/{$d.productkey}/{$d.image}" height="200px" width="150px"></td>
    <td>{$d.category}</td>
    <td>{$d.name}</td>
    <td>{$d.details}</td> 
    <td>{$d.rentamt}</td>
    <td>{$d.amount}</td>
    {if $d.selling=='Rent'}
    <td><a href="productrent.php?key={$d.productkey}&&amt={$d.rentamt}" class="btn btn-warning">Rent</a></td>
    {elseif $d.selling=='Sell'}
    <td><a href="productbuy.php?key={$d.productkey}&&amt={$d.amount}&&log={$d.loginid}" class="btn btn-warning">Buy</a></td>
    {else}
    <td><a href="productbuy.php?key={$d.productkey}&&amt={$d.amount}&&log={$d.loginid}" class="btn btn-warning">Buy</a></td>
    <td><a href="productrent.php?key={$d.productkey}&&amt={$d.rentamt}&&log={$d.loginid}" class="btn btn-warning">Rent</a></td>

    {/if}
    <td><a href="cart.php?key={$d.productkey}&&amt={$d.rentamt}&&log={$d.loginid}&&tamt={$d.amount}" class="btn btn-warning ">Add To Cart </a></td>
    <td><a href="customerofferview.php?key={$d.productkey}&&log={$d.loginid}&&okey={$d.offkey}" class="btn btn-warning">offers</a></td>

    
    </tr>
    {/foreach}
    </table>
    </center>-->
    <br>
    <div class="container">
      <div class="row">
        {foreach from=$view item="d"}
        <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
          <div class="card border-0 shadow-sm">
            <a href="productdetails.php?key={$d.productkey}" class="text-decoration-none text-dark">
              <center> <img src="images/{$d.productkey}/{$d.image}" class="rounded" height="225px" width="160px"><br></center>
              <div class="card-body">
                <h5 class="card-title mb-0">{$d.name}</h5>
                <p class="card-text text-muted">Category: {$d.category}</p>
                <p class="card-text">Rent Amount: <span class="text-warning">{$d.rentamt} Rs</span></p>
                <p class="card-text">Amount: <span class="text-warning">{$d.amount} Rs</span></p>
              </div>
            </a>
            <div class="card-footer bg-transparent border-0 text-center">
              {if $d.selling=='Rent'}
              <a href="productrent.php?key={$d.productkey}&amp;amt={$d.rentamt}" class="btn btn-warning btn-sm ">Rent </a>
              {elseif $d.selling=='Sell'}
              <a href="productbuy.php?key={$d.productkey}&amp;amt={$d.amount}&amp;log={$d.loginid}" class="btn btn-warning btn-sm ">Buy </a>
              {else}
              <a href="productbuy.php?key={$d.productkey}&amp;amt={$d.amount}&amp;log={$d.loginid}" class="btn btn-warning btn-sm ">Buy </a>
              <a href="productrent.php?key={$d.productkey}&amp;amt={$d.rentamt}&amp;log={$d.loginid}" class="btn btn-warning btn-sm ">Rent </a>
              {/if}
              <a href="cart.php?key={$d.productkey}&amp;amt={$d.rentamt}&amp;log={$d.loginid}&amp;tamt={$d.amount}" class="btn btn-warning btn-sm cart">Add To Cart</a>
              <a href="customerofferview.php?key={$d.productkey}&amp;log={$d.loginid}&amp;okey={$d.offkey}" class="btn btn-warning btn-sm ">Offers </a>
            </div>
          </div>
        </div>
        {/foreach}
      </div>
    </div>
    
    
     {/if} 

</body></html>