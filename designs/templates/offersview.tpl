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
        <th>Offers</th>
        <th>Offers Limit</th>

     <th></th>
     <th></th>
        
   <th>

    
    
    </tr>
    {foreach from=$data item="d"}
    <tr>
    <td><img src="images/{$d.productkey}/{$d.image}" height="200px" width="150px"></td>
   
    <td>{$d.name}</td>
    <td>{$d.offers}</td>
    <td>{$d.offerlimit}</td>
    <td><a href="offersedit.php?key={$d.productkey}&&log={$d.loginid}&&okey={$d.offkey}" class="btn btn-warning ">Edit</a></td>
    <td><a href="offerdeletion.php?key={$d.productkey}&&log={$d.loginid}&&okey={$d.offkey}" class="btn btn-warning ">Delete</a></td>



    </tr>
    {/foreach}
    </table>
    </center>
     {/if}

</body></html>