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
        <th>Name</th> 
        <th>Customer Name</th>
        <th>Address</th>
      <th>Contact</th>
      <th>feedback</th>

   <th>

    
    
    </tr>
    {foreach from=$data item="d"}
    <tr>
    <td><img src="images/{$d.productkey}/{$d.image}" height="200px" width="150px"></td>
   
    <td>{$d.name}</td>
    <td>{$d.customername}</td>
    <td>{$d.address}</td>
    <td>{$d.contact}</td>
    <td>{$d.feedback}</td>

    </tr>
    {/foreach}
    </table>
    </center>
     {/if}

</body></html>