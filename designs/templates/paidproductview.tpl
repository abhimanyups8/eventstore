<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
</head>
<body>


<div class="container">
  <div class="row">
    {foreach from=$data item="d"}
    <div class="col-lg-3 col-md-4 col-sm-6 product-preview">
      <div class="card mb-4 shadow-sm">
        <a href="productdetails.php?key={$d.productkey}">
          <center> <img src="images/{$d.productkey}/{$d.image}" class="rounded" height="225px" width="160px"><br></center>        </a>
        <div class="card-body">
          <h5 class="card-title">{$d.name}</h5>
          <p class="card-text">Category: {$d.category}</p>
          <p class="card-text"><font color="orange">Rent Amount:</font> {$d.rentamt} Rs</p>
          <p class="card-text"><font color="orange">Amount:</font> {$d.amount} Rs</p>
          {if $d.delstatus==1}
          <div class="text-center">
            <p class="text-success">Delivered</p>
            <a href="return.php?key={$d.cartkey}" class="btn btn-warning btn-sm">Return</a>
            <a href="feedback.php?key={$d.productkey}&&log={$d.loginid}" class="btn btn-warning btn-sm">Feedback</a>
            <a href="complaints.php?key={$d.cartkey}&&log={$d.loginid}&&productid={$d.productkey}" class="btn btn-danger btn-sm">Complaints</a>
          </div>
          {else}
          <p class="text-warning text-center">Yet To Be Delivered</p>
          {if $d.returnstatus==1}
          <p class="text-info">Return Accepted</p>
          {/if}
          {/if}
        </div>
      </div>
    </div>
    {/foreach}
  </div>
</div>

</body>
</html>
