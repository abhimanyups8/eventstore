    <!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <br><br><br><br><br><br>
     <table class="table align-items-center table-flush" id="dataTable">

                        <tr>
                            <th>Name</th>
                          <th>Image</th>
                                                    <th>Customer Name</th>

                            <th>Address</th>
                            <th>Contact number</th>
                            

                          </tr>
                          {foreach from=$data item="d"}
                          <tr>
                            <td>{$d.name}</td>
                         <td><img src="images/{$d.productkey}/{$d.image}" height="200px" width="150px"></td>
                            <td>{$d.customername}</td>

                            <td>{$d.address}</td>
                         <td>{$d.contact}</td>
                            <td>{$d.city}</td>
                            {if $d.delstatus==1}
                            <td><b>Delivered</b></td>
                       
                          {else}
                          <td><a href="deliverystatusupdate.php?key={$d.cartkey}&&log={$d.loginid}" class="btn btn-warning">Delivered</a></td>
                       {/if}

               
                              
                          </tr>
                          {/foreach}
     </table></body></html>

 