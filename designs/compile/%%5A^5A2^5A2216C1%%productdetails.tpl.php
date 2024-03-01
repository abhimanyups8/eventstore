<?php /* Smarty version 2.6.26, created on 2023-10-02 12:00:33
         compiled from productdetails.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
</head>
<body>
<div class="container-fluid">
  <div class="row justify-content-center">
    <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
    <div class="col-lg-3 col-md-4 col-sm-6 product-preview" style="border-right: 2px solid black;">
      <a href="">
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
        <!-- <?php if ($this->_tpl_vars['d']['delstatus'] == 1): ?>
        <div class="text-center">
          Delivered
          <a href="return.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
" class="btn btn-warning">Return</a>
        </div>
        <?php else: ?>
        <center><label>Yet To Be Delivered</label></center> 
        <?php endif; ?> -->
        <div class="text-center">
          <a href="cart.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&amt=<?php echo $this->_tpl_vars['d']['rentamt']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
&&tamt=<?php echo $this->_tpl_vars['d']['amount']; ?>
" class="btn btn-warning cart">Add To Cart<img src="images/addtocart1.gif" height="20px" width="20px"></a>
          <a href="customerofferview.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
&&okey=<?php echo $this->_tpl_vars['d']['offkey']; ?>
" class="btn btn-warning offer">Offers<img src="images/offers.gif"></a>
        </div>
      </a>
    </div>
    <?php endforeach; endif; unset($_from); ?>
  </div>
</div>
</body>
</html>