<?php /* Smarty version 2.6.26, created on 2023-10-17 09:15:14
         compiled from offersview.tpl */ ?>
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
        <th>Offers</th>
        <th>Offers Limit</th>

     <th></th>
     <th></th>
        
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
    <td><?php echo $this->_tpl_vars['d']['offers']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['offerlimit']; ?>
</td>
    <td><a href="offersedit.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
&&okey=<?php echo $this->_tpl_vars['d']['offkey']; ?>
" class="btn btn-warning ">Edit</a></td>
    <td><a href="offerdeletion.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
&&okey=<?php echo $this->_tpl_vars['d']['offkey']; ?>
" class="btn btn-warning ">Delete</a></td>



    </tr>
    <?php endforeach; endif; unset($_from); ?>
    </table>
    </center>
     <?php endif; ?>

</body></html>