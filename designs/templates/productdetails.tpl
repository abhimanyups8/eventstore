<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
</head>
<body>
<div class="container-fluid">
  <div class="row justify-content-center">
    {foreach from=$data item="d"}
    <div class="col-lg-3 col-md-4 col-sm-6 product-preview" style="border-right: 2px solid black;">
      <a href="">
        <center><img src="images/{$d.productkey}/{$d.image}" class="rounded" height="200px" width="150px"></center><br>
        <div class="text-center">
          <div>{$d.category}</div>
          <div>{$d.name}</div>
          <div><font color="orange">Rent Amount:</font> {$d.rentamt} Rs</div>
          <div><font color="orange">Amount:</font> {$d.amount} Rs</div>
        </div>
        <!-- {if $d.delstatus==1}
        <div class="text-center">
          Delivered
          <a href="return.php?key={$d.cartkey}" class="btn btn-warning">Return</a>
        </div>
        {else}
        <center><label>Yet To Be Delivered</label></center> 
        {/if} -->
        <div class="text-center">
          <a href="cart.php?key={$d.productkey}&&amt={$d.rentamt}&&log={$d.loginid}&&tamt={$d.amount}" class="btn btn-warning cart">Add To Cart<img src="images/addtocart1.gif" height="20px" width="20px"></a>
          <a href="customerofferview.php?key={$d.productkey}&&log={$d.loginid}&&okey={$d.offkey}" class="btn btn-warning offer">Offers<img src="images/offers.gif"></a>
        </div>
      </a>
    </div>
    {/foreach}
  </div>
</div>
</body>
</html>
