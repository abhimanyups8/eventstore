<html>
<head><title>Registration</title></head>
<body>
    <br><br><br><br><br><br>
    <center><h2><u>Offers Registration</u></h2>
        <table>
        <form method="post" action="">
        {foreach from=$data item="d"}
            <input type="hidden" name="hide" value="h">
            <tr><td>Offers</td><td><textarea name="offers" class="form-control">{$d.offers}</textarea></td></tr>
            <tr><td>Number of days</td><td><input type="text" name="date" value="{$d.offerlimit}" class="form-control"></td></tr>

            <tr><td></td><td> <input type="Submit" value="Edit"></td></tr>
    {/foreach}
        </form>
    </table>
    </center>
</body></html>

            
