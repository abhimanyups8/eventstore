<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
</head>
<body>
<div class="container-fluid">
  <div class="row justify-content">
    {foreach from=$data item="d"}
    <div class="cad col-lg-3 col-md-4 col-sm-6 product-preview" style="border: 1px solid black;">
      <a href="productdetails.php?key={$d.productkey}">
        <center><img src="images/{$d.productkey}/{$d.image}" class="rounded" height="200px" width="150px"></center><br>
        <div class="text-center">
          <div>{$d.category}</div>
          <div>{$d.name}</div>
          <div><font color="orange">Rent Amount:</font> {$d.rentamt} Rs</div>
          <div><font color="orange">Amount:</font> {$d.amount} Rs</div>
        </div>
        {if $d.delstatus==1}
        <center>Delivered</center>
        <div class="text-center">
          <a href="return.php?key={$d.cartkey}" class="btn btn-warning">Return</a>
          <a href="feedback.php?key={$d.productkey}&&log={$d.loginid}" class="btn btn-warning">Feedback</a><br>
        <br>  <a href="complaints.php?key={$d.cartkey}&&log={$d.loginid}&&productid={$d.productkey}" class="btn btn-danger">complaints</a>


        </div>
        {else}
        <center><label>Yet To Be Delivered</label></center>
        {if $d.returnstatus==1}
        Return Accepted
        {/if}
        {/if}
      </a>
    </div>
    {/foreach}
  </div>
</div>
</body>
</html>
