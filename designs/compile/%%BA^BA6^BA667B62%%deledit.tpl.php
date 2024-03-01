<?php /* Smarty version 2.6.26, created on 2024-02-02 13:35:07
         compiled from deledit.tpl */ ?>
<html>
<head><title>Registration</title></head>
<body><br><br><br><br>
    <center>
        <form method="post" action="" enctype="multipart/form-data">
          <table>
           <input type="hidden" name="hide" value="h">
           <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
           <tr><td>Delivery Boy Name</td><td><input type="text" name="delname" value="<?php echo $this->_tpl_vars['d']['delname']; ?>
" class="form-control"></td></tr>
           <tr><td>Delivery Boy Address</td><td><textarea name="address" class="form-control"><?php echo $this->_tpl_vars['d']['address']; ?>
</textarea></td></tr>
           <tr><td>Pincode</td><td><input type="text" name="pincode" value="<?php echo $this->_tpl_vars['d']['pincode']; ?>
" class="form-control"></td></tr>
           <tr><td><label>District</label></td><td>
             <select name="district" value="<?php echo $this->_tpl_vars['d']['district']; ?>
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
            <tr><td> Contact number </td><td><input type="text" name="contactno" value="<?php echo $this->_tpl_vars['d']['contactno']; ?>
"class="form-control"></td></tr>
            <tr><td>email</td><td><input type="email" name="email" value="<?php echo $this->_tpl_vars['d']['email']; ?>
"class="form-control"></td></tr>
           <tr><td></td><td> <input type="Submit" value="Register" class="btn btn-success"></td></tr>
           <?php endforeach; endif; unset($_from); ?>
            </form>
        </table>
        </center>
        
</body>
</html> 