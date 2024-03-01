<?php /* Smarty version 2.6.26, created on 2023-10-13 10:04:20
         compiled from returnview.tpl */ ?>
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
        <th>Customer Name</th>
        <th>Address</th>
      <th>Contact</th>
      <th>Reason</th>

   <th>

    
    
    </tr>
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
    <tr>
   
    <td><?php echo $this->_tpl_vars['d']['customername']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['contact']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['reason']; ?>
</td>
        <td><a href="returnpayment.php?am=<?php echo $this->_tpl_vars['d']['totalamount']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
&&ckey=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
" class="btn btn-warning">Return Payment</a></td>
<?php if ($this->_tpl_vars['d']['returnstatus'] == 1): ?>
                            <td><b>Return Accepted</b></td>
                       
                          <?php else: ?>
  <td><a href="returnaccept.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
" class="btn btn-warning">Return Accept</a></td>
                       <?php endif; ?>

    </tr>

    <?php endforeach; endif; unset($_from); ?>
    </table>
    </center>
     <?php endif; ?>

</body></html>