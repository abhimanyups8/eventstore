<?php /* Smarty version 2.6.26, created on 2023-05-28 09:21:32
         compiled from offersedit.tpl */ ?>
<html>
<head><title>Registration</title></head>
<body>
    <br><br><br><br><br><br>
    <center><h2><u>Offers Registration</u></h2>
        <table>
        <form method="post" action="">
        <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
            <input type="hidden" name="hide" value="h">
            <tr><td>Offers</td><td><textarea name="offers"><?php echo $this->_tpl_vars['d']['offers']; ?>
</textarea></td></tr>
            <tr><td>Number of days</td><td><input type="text" name="date" value="<?php echo $this->_tpl_vars['d']['offerlimit']; ?>
"></td></tr>

            <tr><td></td><td> <input type="Submit" value="Edit"></td></tr>
    <?php endforeach; endif; unset($_from); ?>
        </form>
    </table>
    </center>
</body></html>

            