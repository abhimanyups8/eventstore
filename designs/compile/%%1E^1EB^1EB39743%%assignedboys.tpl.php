<?php /* Smarty version 2.6.26, created on 2023-10-16 04:54:37
         compiled from assignedboys.tpl */ ?>
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
                            <th>Contact number</th>
                            
                            

                          </tr>
                          <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
                          <tr>
                            <td><?php echo $this->_tpl_vars['d']['delname']; ?>
</td>
                             <td><?php echo $this->_tpl_vars['d']['contactno']; ?>
</td>
                            
      <td><a href="deletedelboys.php?key=<?php echo $this->_tpl_vars['d']['assignkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning ">Remove Request</a></td>

               
                              
                          </tr>
                          <?php endforeach; endif; unset($_from); ?>
     </table></body></html>