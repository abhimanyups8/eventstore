<?php /* Smarty version 2.6.26, created on 2024-03-19 07:06:54
         compiled from paidproductview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
</head>
<body>


<div class="container">
  <div class="row">
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
    <div class="col-lg-3 col-md-4 col-sm-6 product-preview">
      <div class="card mb-4 shadow-sm">
        <a href="productdetails.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
">
          <center> <img src="images/<?php echo $this->_tpl_vars['d']['productkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" class="rounded" height="225px" width="160px"><br></center>        </a>
        <div class="card-body">
          <h5 class="card-title"><?php echo $this->_tpl_vars['d']['name']; ?>
</h5>
          <p class="card-text">Category: <?php echo $this->_tpl_vars['d']['category']; ?>
</p>
          <p class="card-text"><font color="orange">Rent Amount:</font> <?php echo $this->_tpl_vars['d']['rentamt']; ?>
 Rs</p>
          <p class="card-text"><font color="orange">Amount:</font> <?php echo $this->_tpl_vars['d']['amount']; ?>
 Rs</p>
          <?php if ($this->_tpl_vars['d']['delstatus'] == 1): ?>
          <div class="text-center">
            <p class="text-success">Delivered</p>
            <a href="return.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
" class="btn btn-warning btn-sm">Return</a>
            <a href="feedback.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning btn-sm">Feedback</a>
            <a href="complaints.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
&&productid=<?php echo $this->_tpl_vars['d']['productkey']; ?>
" class="btn btn-danger btn-sm">Complaints</a>
          </div>
          <?php else: ?>
          <p class="text-warning text-center">Yet To Be Delivered</p>
          <?php if ($this->_tpl_vars['d']['returnstatus'] == 1): ?>
          <p class="text-info">Return Accepted</p>
          <?php endif; ?>
          <?php endif; ?>
        </div>
      </div>
    </div>
    <?php endforeach; endif; unset($_from); ?>
  </div>
</div>

</body>
</html>