<?php /* Smarty version 2.6.26, created on 2023-06-13 18:33:10
         compiled from customersearch.tpl */ ?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">

</head>
<body>
    <br><br><br><br><br><br>
<table align="center"> <form action="" method="POST">
<input type="hidden" name="hide" value="h">
<tr><td>Search Shops</td><td><input type="text" name="search" class="form-control">
<td><input type="submit" value="Search" class="btn btn-success"></td></tr>

</form>
</table>

<?php if ($this->_tpl_vars['view'] != null): ?>
<tr>
<!-- <table  class="table table-hover table-striped">
    <th>Image</th>
<th>Shop Name</th>
<th>Shop address</th> 
<th>Pincode</th>
<th>District</th>
<th>City</th>
<th>Contact</th>
<th>Registration</th>

</tr>
<?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
<tr>
    <td><img src="images/<?php echo $this->_tpl_vars['d']['eventkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" height="200px" width="150px"></td>
<td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
<td><?php echo $this->_tpl_vars['d']['address']; ?>
</td>
<td><?php echo $this->_tpl_vars['d']['pincode']; ?>
</td>
<td><?php echo $this->_tpl_vars['d']['dist']; ?>
</td> 
<td><?php echo $this->_tpl_vars['d']['city']; ?>
</td>
<td><?php echo $this->_tpl_vars['d']['contact']; ?>
</td>
<td><?php echo $this->_tpl_vars['d']['registration']; ?>
</td>

</tr>
<?php endforeach; endif; unset($_from); ?>
</table> -->
<div class="container">
    <div class="row">
      <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
      <a href="shopdetails.php?key=<?php echo $this->_tpl_vars['d']['loginid']; ?>
">
      <div class="col-lg-3 product-preview" style="border-right: 2px solid black; margin-bottom: 20px;">
        <a href="shopdetails.php?key=<?php echo $this->_tpl_vars['d']['loginid']; ?>
">
          <center><img src="images/<?php echo $this->_tpl_vars['d']['eventkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" height="200px" width="150px"><br></center>
          <div class="text-center">
            <div><font color="orange">Shop Name:</font> <?php echo $this->_tpl_vars['d']['name']; ?>
</div>
            <div><font color="orange">City:</font> <?php echo $this->_tpl_vars['d']['city']; ?>
</div>
          </div>
          <div class="text-center">
          </div>
        </a>
      </div>
      <?php endforeach; endif; unset($_from); ?>
    </div>
  </div>
<?php endif; ?>



</body></html>