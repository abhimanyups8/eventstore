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
                            <th>Contact number</th>
                            
                            

                          </tr>
                          {foreach from=$data item="d"}
                          <tr>
                            <td>{$d.delname}</td>
                             <td>{$d.contactno}</td>
                            
      <td><a href="deletedelboys.php?key={$d.assignkey}&&log={$d.loginid}" class="btn btn-warning ">Remove Request</a></td>

               
                              
                          </tr>
                          {/foreach}
     </table></body></html>