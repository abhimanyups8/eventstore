<?php /* Smarty version 2.6.26, created on 2023-10-13 09:49:58
         compiled from feedbackview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <br><br><br><br><br><br>



</table>
    <?php if ($this->_tpl_vars['data'] != null): ?>
    <tr>
        <center>
    <table class="table table-striped table-hover">
        <th>Image</th>
        <th>Name</th> 
        <th>Customer Name</th>
        <th>Address</th>
      <th>Contact</th>
      <th>feedback</th>

   <th>

    
    
    </tr>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
    <tr>
    <td><img src="images/<?php echo $this->_tpl_vars['d']['productkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" height="200px" width="150px"></td>
   
    <td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['customername']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['contact']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['feedback']; ?>
</td>

    </tr>
    <?php endforeach; endif; unset($_from); ?>
    </table>
    </center>
     <?php endif; ?>

</body></html>