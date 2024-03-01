<?php /* Smarty version 2.6.26, created on 2023-10-16 04:48:39
         compiled from paidproductview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
</head>
<body>
<div class="container-fluid">
  <div class="row justify-content">
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
    <div class="cad col-lg-3 col-md-4 col-sm-6 product-preview" style="border: 1px solid black;">
      <a href="productdetails.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
">
        <center><img src="images/<?php echo $this->_tpl_vars['d']['productkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" class="rounded" height="200px" width="150px"></center><br>
        <div class="text-center">
          <div><?php echo $this->_tpl_vars['d']['category']; ?>
</div>
          <div><?php echo $this->_tpl_vars['d']['name']; ?>
</div>
          <div><font color="orange">Rent Amount:</font> <?php echo $this->_tpl_vars['d']['rentamt']; ?>
 Rs</div>
          <div><font color="orange">Amount:</font> <?php echo $this->_tpl_vars['d']['amount']; ?>
 Rs</div>
        </div>
        <?php if ($this->_tpl_vars['d']['delstatus'] == 1): ?>
        <center>Delivered</center>
        <div class="text-center">
          <a href="return.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
" class="btn btn-warning">Return</a>
          <a href="feedback.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning">Feedback</a><br>
        <br>  <a href="complaints.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
&&productid=<?php echo $this->_tpl_vars['d']['productkey']; ?>
" class="btn btn-danger">complaints</a>


        </div>
        <?php else: ?>
        <center><label>Yet To Be Delivered</label></center>
        <?php if ($this->_tpl_vars['d']['returnstatus'] == 1): ?>
        Return Accepted
        <?php endif; ?>
        <?php endif; ?>
      </a>
    </div>
    <?php endforeach; endif; unset($_from); ?>
  </div>
</div>
</body>
</html>