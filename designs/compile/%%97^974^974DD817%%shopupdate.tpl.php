<?php /* Smarty version 2.6.26, created on 2023-07-15 10:47:36
         compiled from shopupdate.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
    <form method="post">
        <table  align="center">
          <input type="hidden" name="hide" value="h">

    <tr><td> Name</td><td><input type="text" name="name" value="<?php echo $this->_tpl_vars['d']['name']; ?>
" class="form-control"></td></tr>
           <tr><td> Address</td><td><textarea name="address" class="form-control"><?php echo $this->_tpl_vars['d']['address']; ?>
</textarea></td></tr>
           <tr><td>Pincode</td><td><input type="text" name="pincode" value="<?php echo $this->_tpl_vars['d']['pincode']; ?>
" class="form-control"></td></tr>
           <tr><td><label>District</label></td><td>
             <select name="dist" value="<?php echo $this->_tpl_vars['d']['dist']; ?>
"><option></option>
            <option >Trivandrum</option>
             <option>Kollam</option>
            <option >Pathanamthitta</option> 
            <option >Alappuzha</option>
             <option >Kottayam</option>
            <option >Idukki</option> 
            <option>Eranakulam</option>
             <option>Thrissur</option>
            <option >Palakkad</option> 
            <option>Malappuram</option>
             <option>Kozhikod</option>
            <option>Wayanad</option> 
            <option>Kannur</option>
             <option>Kasargod</option>
         </select></td></tr>
          
           <tr><td> City </td><td><input type="text" name="city" value="<?php echo $this->_tpl_vars['d']['city']; ?>
" class="form-control"></td></tr>
            <tr><td> Contact number </td><td><input type="text" name="contact" value="<?php echo $this->_tpl_vars['d']['contact']; ?>
" class="form-control"></td></tr>
            <tr><td> Registration number </td><td><input type="text" name="registration" value="<?php echo $this->_tpl_vars['d']['registration']; ?>
" class="form-control"></td></tr>
 
           <tr><td> Email</td><td><input type="email" name="email" value="<?php echo $this->_tpl_vars['d']['email']; ?>
" class="form-control"></td></tr>
         <tr><td></td><td> <input type="Submit" value="Edit"class="btn btn-success" ></td></tr>
        </table> </form>
         <?php endforeach; endif; unset($_from); ?>
    
</body>
</html>