<?php /* Smarty version 2.6.26, created on 2023-10-16 04:48:57
         compiled from deliveryshopview.tpl */ ?>
    <!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    
     <table class="table align-items-center table-flush" id="dataTable">

                        <tr>
                            <th>Name</th>
                            <th>Address</th>
                            <th>District</th>
                            <th>Contact number</th>
                            <th>City</th>
                            <th>Pincode</th>
                            <th>Email</th>
                          </tr>
                          <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                          <tr>
                            <td><?php echo $this->_tpl_vars['d']['delname']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['d']['district']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['d']['contactno']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['d']['city']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['d']['pincode']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['d']['email']; ?>
</td>
         <td><a href="assigndeliveryboys.php?key=<?php echo $this->_tpl_vars['cartkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning">Assign</a></td>
               
                              
                          </tr>
                          <?php endforeach; endif; unset($_from); ?>
     </table></body></html>