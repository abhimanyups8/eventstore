<?php /* Smarty version 2.6.26, created on 2023-10-13 05:12:24
         compiled from complaintedit.tpl */ ?>
<html>
<head><title>Registration</title></head>
<body>
    <br><br><br><br><br><br>
    <center>
        <table>
        <form method="post" action="">
        <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
            <input type="hidden" name="hide" value="h">
            <tr><td>Complaint</td><td><textarea name="complaint"><?php echo $this->_tpl_vars['d']['complaint']; ?>
</textarea></td></tr>

            <tr><td></td><td> <input type="Submit" value="Edit"></td></tr>
    <?php endforeach; endif; unset($_from); ?>
        </form>
    </table>
    </center>
</body></html>

            