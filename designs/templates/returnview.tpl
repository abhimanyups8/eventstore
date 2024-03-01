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
        <th>Customer Name</th>
        <th>Address</th>
      <th>Contact</th>
      <th>Reason</th>

   <th>

    
    
    </tr>
    {foreach from=$data item="d"}
    <tr>
   
    <td>{$d.customername}</td>
    <td>{$d.address}</td>
    <td>{$d.contact}</td>
    <td>{$d.reason}</td>
        <td><a href="returnpayment.php?am={$d.totalamount}&&log={$d.loginid}&&ckey={$d.cartkey}" class="btn btn-warning">Return Payment</a></td>
{if $d.returnstatus==1}
                            <td><b>Return Accepted</b></td>
                       
                          {else}
  <td><a href="returnaccept.php?key={$d.cartkey}" class="btn btn-warning">Return Accept</a></td>
                       {/if}

    </tr>

    {/foreach}
    </table>
    </center>
     {/if}

</body></html>