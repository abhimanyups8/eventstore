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
          <div class="cad col-lg-3 col-md-4 col-sm-6 product-preview" style="border: 1px solid black;">
            <a href="productdetails.php?key={$d.productkey}">
             <center> <img src="images/{$d.productkey}/{$d.image}" class="rounded" height="225px" width="160px"><br></center>
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
            </a>
          </div>
          {/foreach}
        </div>
      </div>
     {/if} 

</body></html>