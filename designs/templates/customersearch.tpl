
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">

</head>
<body>
    <br><br><br><br><br><br>
<table align="center"> <form action="" method="POST">
<input type="hidden" name="hide" value="h">
<tr><td>Search Shops</td><td><input type="text" name="search" class="form-control">
<td><input type="submit" value="Search" class="btn btn-success"></td></tr>

</form>
</table>

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
<td>{$d.contact}</td>
<td>{$d.registration}</td>

</tr>
{/foreach}
</table> -->
<div class="container">
    <div class="row">
      {foreach from=$view item="d"}
      <a href="shopdetails.php?key={$d.loginid}">
      <div class="col-lg-3 product-preview" style="border-right: 2px solid black; margin-bottom: 20px;">
        <a href="shopdetails.php?key={$d.loginid}">
          <center><img src="images/{$d.eventkey}/{$d.image}" height="200px" width="150px"><br></center>
          <div class="text-center">
            <div><font color="orange">Shop Name:</font> {$d.name}</div>
            <div><font color="orange">City:</font> {$d.city}</div>
          </div>
          <div class="text-center">
          </div>
        </a>
      </div>
      {/foreach}
    </div>
  </div>
{/if}



</body></html>