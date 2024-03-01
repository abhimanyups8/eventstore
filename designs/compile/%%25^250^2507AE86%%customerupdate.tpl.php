<?php /* Smarty version 2.6.26, created on 2023-06-02 17:38:18
         compiled from customerupdate.tpl */ ?>
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
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
    <form method="post">
        <table  align="center">
          <input type="hidden" name="hide" value="h">

    <tr><td> Name</td><td><input type="text" name="name" class="form-control" value="<?php echo $this->_tpl_vars['d']['customername']; ?>
" ></td></tr>
    <tr><td> Address</td><td><textarea name="address" class="form-control"><?php echo $this->_tpl_vars['d']['address']; ?>
</textarea></td></tr>

    <tr><td>Contact</td><td><input type="text" name="contact" value="<?php echo $this->_tpl_vars['d']['contact']; ?>
" class="form-control"></td></tr>
            <tr><td>email</td><td><input type="email" name="email" value="<?php echo $this->_tpl_vars['d']['email']; ?>
" class="form-control"></td></tr>
            <tr><td></td><td> <input type="Submit" class="btn btn-dark" value="Edit"></td></tr>
           </table> </form>
            <?php endforeach; endif; unset($_from); ?>
       
   </body>
   </html>
            