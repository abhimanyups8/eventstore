<html>
<head><title>Registration</title></head>
<body>
    <br><br><br><br><br><br>
    <center>
        <table>
        <form method="post" action="">
        {foreach from=$data item="d"}
            <input type="hidden" name="hide" value="h">
            <tr><td>Complaint</td><td><textarea name="complaint">{$d.complaint}</textarea></td></tr>

            <tr><td></td><td> <input type="Submit" value="Edit" class="btn btn-danger"></td></tr>
    {/foreach}
        </form>
    </table>
    </center>
</body></html>

            
