<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <br><br><br><br><br><br>



</table>
    {if $data!=null}
    <tr>
        <center>
    <table class="table table-striped table-hover">
        <th>Image</th>
        <th>Category</th>
    <th>Name</th>
    <th>Details</th> 
    <th>Quantity</th>
    <th>Amount Paid</th>
    <th>Customer Name</th>
   <th>Address</th>
   <th>Contact</th>


    
    
    </tr>
    {foreach from=$data item="d"}
    <tr>
    <td><img src="images/{$d.productkey}/{$d.image}" height="200px" width="150px"></td>
    <td>{$d.category}</td>
    <td>{$d.name}</td>
    <td>{$d.details}</td> 
    <td>{$d.quantity}</td>
    <td>{$d.totalamount}</td>
    <td>{$d.customername}</td>
    <td>{$d.address}</td>
     <td>{$d.contact}</td>
         <td><a href="deliveryshopview.php?key={$d.cartkey}" class="btn btn-warning">Assign Delivery Boys</a></td>
         <td><a href="assignedboys.php?key={$d.cartkey}" class="btn btn-warning">Assigned Delivery Boys</a></td>
{if $d.delstatus==1}
                              <td><b>Delivered</b></td>
                                                                     <td><a href="returnview.php?key={$d.cartkey}" class="btn btn-warning">Return Request</a></td>



{else}
                              <td><b>Yet to be Delivered</b></td>
                              {/if}
    </tr>
    {/foreach}
    </table>
    </center>
     {/if}

</body></html>