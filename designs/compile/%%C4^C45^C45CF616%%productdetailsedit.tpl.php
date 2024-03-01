<?php /* Smarty version 2.6.26, created on 2023-07-19 06:27:10
         compiled from productdetailsedit.tpl */ ?>
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
          <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
          <tr><td> Category</td><td><input type="text" name="category" value="<?php echo $this->_tpl_vars['d']['category']; ?>
" class="form-control mb-2"></td></tr>

    <tr><td> Name</td><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['d']['name']; ?>
" class="form-control mb-2"></td></tr>
           <tr><td> Address</td><td><textarea name="details" class="form-control mb-2"><?php echo $this->_tpl_vars['d']['details']; ?>
</textarea></td></tr>
           <tr><td>Rent Amount</td><td><input type="text" name="rentamt" value="<?php echo $this->_tpl_vars['d']['rentamt']; ?>
" class="form-control mb-2"></td></tr>
           
        <tr><td> Amount</td><td><input type="text" name="amount" value="<?php echo $this->_tpl_vars['d']['amount']; ?>
" class="form-control mb-2"></td></tr>
         <tr><td></td><td> <input type="Submit" value="Edit" class="btn btn-primary mb-2"></td></tr>
         <?php endforeach; endif; unset($_from); ?>
        </table> </form>
     
</body>
</html>