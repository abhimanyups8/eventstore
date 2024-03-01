<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><br>
    {foreach from=$data item="d"}
    <form method="post">
        <table  align="center">
          <input type="hidden" name="hide" value="h">

    <tr><td> Name</td><td><input type="text" name="name" class="form-control" value="{$d.customername}" ></td></tr>
    <tr><td> Address</td><td><textarea name="address" class="form-control">{$d.address}</textarea></td></tr>

    <tr><td>Contact</td><td><input type="text" name="contact" value="{$d.contact}" class="form-control"></td></tr>
            <tr><td>email</td><td><input type="email" name="email" value="{$d.email}" class="form-control"></td></tr>
            <tr><td></td><td> <input type="Submit" class="btn btn-dark" value="Edit"></td></tr>
           </table> </form>
            {/foreach}
       
   </body>
   </html>
            