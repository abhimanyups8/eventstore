<?php /* Smarty version 2.6.26, created on 2023-10-16 04:59:40
         compiled from orders.tpl */ ?>
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
        <th>Category</th>
    <th>Name</th>
    <th>Details</th> 
    <th>Quantity</th>
    <th>Amount Paid</th>
    <th>Customer Name</th>
   <th>Address</th>
   <th>Contact</th>


    
    
    </tr>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
    <tr>
    <td><img src="images/<?php echo $this->_tpl_vars['d']['productkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" height="200px" width="150px"></td>
    <td><?php echo $this->_tpl_vars['d']['category']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['details']; ?>
</td> 
    <td><?php echo $this->_tpl_vars['d']['quantity']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['totalamount']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['customername']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
     <td><?php echo $this->_tpl_vars['d']['contact']; ?>
</td>
         <td><a href="deliveryshopview.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
" class="btn btn-warning">Assign Delivery Boys</a></td>
         <td><a href="assignedboys.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
" class="btn btn-warning">Assigned Delivery Boys</a></td>
<?php if ($this->_tpl_vars['d']['delstatus'] == 1): ?>
                              <td><b>Delivered</b></td>
                                                                     <td><a href="returnview.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
" class="btn btn-warning">Return Request</a></td>



<?php else: ?>
                              <td><b>Yet to be Delivered</b></td>
                              <?php endif; ?>
    </tr>
    <?php endforeach; endif; unset($_from); ?>
    </table>
    </center>
     <?php endif; ?>

</body></html>