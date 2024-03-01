    <!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    
     <table class="table align-items-center table-flush" id="dataTable">

                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>District</th>
                            <th>Contact number</th>
                            <th>City</th>
                            <th>Pincode</th>
                            <th>Email</th>
                          </tr>
                          {foreach from=$data item="d"}
                          <tr>
                            <td>{$d.delname}</td>
                            <td>{$d.address}</td>
                            <td>{$d.district}</td>
                            <td>{$d.contactno}</td>
                            <td>{$d.city}</td>
                            <td>{$d.pincode}</td>
                            <td>{$d.email}</td>
         <td><a href="assigndeliveryboys.php?key={$cartkey}&&log={$d.loginid}" class="btn btn-warning">Assign</a></td>
               
                              
                          </tr>
                          {/foreach}
     </table></body></html>