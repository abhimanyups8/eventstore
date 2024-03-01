<?php /* Smarty version 2.6.26, created on 2023-10-13 05:18:45
         compiled from complaintcustview.tpl */ ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <table class="table align-items-center table-flush" id="dataTable">
        <thead class="thead-light">
<?php if ($this->_tpl_vars['data'] != null): ?>

<th>Image</th>
<th>Product Name</th> 
<th>Customer Name</th>
<th>Address</th>
<th>Contact</th>
<th>Complaints</th>

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
<td><?php echo $this->_tpl_vars['d']['complaint']; ?>
</td>
<td><a href="complaintedit.php?key=<?php echo $this->_tpl_vars['d']['compkey']; ?>
&&prod=<?php echo $this->_tpl_vars['d']['productkey']; ?>
" class="btn btn-warning">Edit</a></td>
    <td><a href="complaintdelete.php?key=<?php echo $this->_tpl_vars['d']['compkey']; ?>
&&prod=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning">Delete</a></td>


</tr>
<?php endforeach; endif; unset($_from); ?>
</table>
<?php endif; ?>
 </body>
 </html>