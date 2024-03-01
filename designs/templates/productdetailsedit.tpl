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
    <form method="post" action="">
        <table  align="center">
          <input type="hidden" name="hide" value="h">
          {foreach from=$data item="d"}
          <tr><td> Category</td><td><input type="text" name="category" value="{$d.category}" class="form-control mb-2"></td></tr>

    <tr><td> Name</td><td><input type="text" name="name" value="{$d.name}" class="form-control mb-2"></td></tr>
           <tr><td> Address</td><td><textarea name="details" class="form-control mb-2">{$d.details}</textarea></td></tr>
           <tr><td>Rent Amount</td><td><input type="text" name="rentamt" value="{$d.rentamt}" class="form-control mb-2"></td></tr>
           
        <tr><td> Amount</td><td><input type="text" name="amount" value="{$d.amount}" class="form-control mb-2"></td></tr>
         <tr><td></td><td> <input type="Submit" value="Edit" class="btn btn-primary mb-2"></td></tr>
         {/foreach}
        </table> </form>
     
</body>
</html>