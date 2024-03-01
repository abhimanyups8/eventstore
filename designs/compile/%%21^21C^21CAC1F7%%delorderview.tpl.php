<?php /* Smarty version 2.6.26, created on 2023-10-14 08:10:33
         compiled from delorderview.tpl */ ?>
    <!DOCTYPE html>
<html>
<head>
<title></title>
</head>
<body>
    <br><br><br><br><br><br>
     <table class="table align-items-center table-flush" id="dataTable">

                        <tr>
                            <th>Name</th>
                          <th>Image</th>
                                                    <th>Customer Name</th>

                            <th>Address</th>
                            <th>Contact number</th>
                            

                          </tr>
                          <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                          <tr>
                            <td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
                         <td><img src="images/<?php echo $this->_tpl_vars['d']['productkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" height="200px" width="150px"></td>
                            <td><?php echo $this->_tpl_vars['d']['customername']; ?>
</td>

                            <td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
                         <td><?php echo $this->_tpl_vars['d']['contact']; ?>
</td>
                            <td><?php echo $this->_tpl_vars['d']['city']; ?>
</td>
                            <?php if ($this->_tpl_vars['d']['delstatus'] == 1): ?>
                            <td><b>Delivered</b></td>
                       
                          <?php else: ?>
                          <td><a href="deliverystatusupdate.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning">Delivered</a></td>
                       <?php endif; ?>

               
                              
                          </tr>
                          <?php endforeach; endif; unset($_from); ?>
     </table></body></html>

 