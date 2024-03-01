 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <table class="table align-items-center table-flush" id="dataTable">
        <thead class="thead-light">
{if $data!=null}

<th>Image</th>
<th>Product Name</th> 
<th>Customer Name</th>
<th>Address</th>
<th>Contact</th>
<th>Complaints</th>

<th>



</tr>
{foreach from=$data item="d"}
<tr>
<td><img src="images/{$d.productkey}/{$d.image}" height="200px" width="150px"></td>

<td>{$d.name}</td>
<td>{$d.customername}</td>
<td>{$d.address}</td>
<td>{$d.contact}</td>
<td>{$d.complaint}</td>
<td><a href="complaintedit.php?key={$d.compkey}&&prod={$d.productkey}" class="btn btn-warning">Edit</a></td>
    <td><a href="complaintdelete.php?key={$d.compkey}&&prod={$d.productkey}&&log={$d.loginid}" class="btn btn-warning">Delete</a></td>


</tr>
{/foreach}
</table>
{/if}
 </body>
 </html>