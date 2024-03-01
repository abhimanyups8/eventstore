<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><br><br><br>
    <table class="table table-striped table-hover">
        <tr>
          <th>Category</th><th>Name</th><th>Image</th><th>Details</th><th>Rent Amount</th><th>Amount</th><th>Selling Opn</th>
        </tr>
        {foreach from=$data item="d"}
  
        <tr>
          <td>{$d.category}</td>
          <td>{$d.name}</td>
          <td><img src="images/{$d.productkey}/{$d.image}" height="200px" width="150px"></td>
          <td>{$d.details}</td>
          <td>{$d.rentamt}</td>
          <td>{$d.amount}</td>
          <td>{$d.selling}</td>


          <td><a href="productedit.php?key={$d.productkey}" class="btn btn-warning">Edit</a></td>
          <td><a href="productdelete.php?key={$d.productkey}" class="btn btn-danger">Delete</a></td>
                    <td><a href="feedbackview.php?key={$d.productkey}&&log={$d.loginid}" class="btn btn-secondary">Feedback View</a></td>
 <td><a href="offersinsert.php?key={$d.productkey}&&log={$d.loginid}" class="btn btn-primary">Offers Insert</a></td>
  <td><a href="offersview.php?key={$d.productkey}&&log={$d.loginid}" class="btn btn-info">View Offers</a></td>

        </tr>
        {/foreach}
      </table>
      
</body>
</html>