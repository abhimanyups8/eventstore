<?php /* Smarty version 2.6.26, created on 2023-10-13 15:51:27
         compiled from cartview.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">

</head>
<body>
   



<!-- </table>
    <?php if ($this->_tpl_vars['view'] != null): ?>
    <tr>
        <center>
    <table class="table table-striped table-hover">
        <th>Image</th>
        <th>Category</th>
    <th>Name</th>
    <th>Details</th> 
    <th>Rent amt</th>
    <th>Amount</th>
    <th>Total amount</th>
    
    
    </tr>
    <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
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
    <td><?php echo $this->_tpl_vars['d']['rentamt']; ?>
</td>
    <td><?php echo $this->_tpl_vars['d']['amount']; ?>
</td>
        <td><?php echo $this->_tpl_vars['d']['totalamount']; ?>
</td>

    <?php if ($this->_tpl_vars['d']['selling'] == 'Rent'): ?>
    <td><a href="productrent.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&amt=<?php echo $this->_tpl_vars['d']['rentamt']; ?>
" class="btn btn-warning">Rent</a></td>
    <?php elseif ($this->_tpl_vars['d']['selling'] == 'Sell'): ?>
    <td><a href="productbuy.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&amt=<?php echo $this->_tpl_vars['d']['amount']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning">Buy</a></td>
    <?php else: ?>
    <td><a href="productbuy.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&amt=<?php echo $this->_tpl_vars['d']['amount']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning">Buy</a></td>
    <td><a href="productrent.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&amt=<?php echo $this->_tpl_vars['d']['rentamt']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning">Rent</a></td>

    <?php endif; ?>
    <td><a href="cartdelete.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
" class="btn btn-warning">Remove from Cart</a></td>


    
    </tr>

    
     
    <?php endforeach; endif; unset($_from); ?>
    </table>
    
    Total Amount=<?php echo $this->_tpl_vars['data']; ?>

    <td><a href="payment.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&am=<?php echo $this->_tpl_vars['data']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning">Buy All</a></td>
 -->
 <div class="container">
    <div class="row">
      <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
          <div class="cad col-lg-3 col-md-4 col-sm-6 product-preview" style="border: 1px solid black;">
        <a href="productdetails.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
">
        <center><img src="images/<?php echo $this->_tpl_vars['d']['productkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" class="rounded" height="200px" width="150px"><br></center>
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
        <?php if ($this->_tpl_vars['d']['selling'] == 'Rent'): ?>
        <div class="text-center">
          <a href="productrent.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&amt=<?php echo $this->_tpl_vars['d']['rentamt']; ?>
" class="btn btn-warning rent">Rent<img src="images/img.gif" height="20px" width="20px"></a>
        </div>
        <?php elseif ($this->_tpl_vars['d']['selling'] == 'Sell'): ?>
        <div class="text-center">
          <a href="productbuy.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&amt=<?php echo $this->_tpl_vars['d']['amount']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning buy">Buy<img src="images/img.gif" height="20px" width="20px"></a>
        </div>
        <?php else: ?>
        <div class="text-center">
          <a href="productbuy.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&amt=<?php echo $this->_tpl_vars['d']['amount']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning buy">Buy<img src="images/img.gif" height="20px" width="20px"></a>
          <a href="productrent.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&amt=<?php echo $this->_tpl_vars['d']['rentamt']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning rent">Rent<img src="images/img.gif" height="20px" width="20px"></a>
        </div>
        <?php endif; ?>
        <div class="text-center">
         <br> <a href="cartdelete.php?key=<?php echo $this->_tpl_vars['d']['cartkey']; ?>
" class="btn btn-warning remove">Remove from Cart</a>
        </div>
      </div>
      <?php endforeach; endif; unset($_from); ?>
    </div>
  </div>
       <?php endif; ?> 
       </body></html>