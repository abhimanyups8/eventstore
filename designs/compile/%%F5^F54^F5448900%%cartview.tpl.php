<?php /* Smarty version 2.6.26, created on 2024-03-19 06:57:50
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
    <div class="col-lg-3 col-md-4 col-sm-6 mb-4">
      <div class="card border-0 shadow-sm">
        <a href="productdetails.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
" class="text-decoration-none text-dark">
          <center> <img src="images/<?php echo $this->_tpl_vars['d']['productkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" class="rounded" height="225px" width="160px"><br></center>          <div class="card-body">
            <h5 class="card-title mb-0"><?php echo $this->_tpl_vars['d']['name']; ?>
</h5>
            <p class="card-text text-muted">Category: <?php echo $this->_tpl_vars['d']['category']; ?>
</p>
            <p class="card-text">Rent Amount: <span class="text-warning"><?php echo $this->_tpl_vars['d']['rentamt']; ?>
 Rs</span></p>
            <p class="card-text">Amount: <span class="text-warning"><?php echo $this->_tpl_vars['d']['amount']; ?>
 Rs</span></p>
          </div>
        </a>
        <div class="card-footer bg-transparent border-0 text-center">
          <?php if ($this->_tpl_vars['d']['selling'] == 'Rent'): ?>
          <a href="productrent.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&amp;amt=<?php echo $this->_tpl_vars['d']['rentamt']; ?>
" class="btn btn-warning btn-sm rent">Rent</a>
          <?php elseif ($this->_tpl_vars['d']['selling'] == 'Sell'): ?>
          <a href="productbuy.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&amp;amt=<?php echo $this->_tpl_vars['d']['amount']; ?>
&amp;log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning btn-sm buy">Buy</a>
          <?php else: ?>
          <a href="productbuy.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&amp;amt=<?php echo $this->_tpl_vars['d']['amount']; ?>
&amp;log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning btn-sm buy">Buy</a>
          <a href="productrent.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&amp;amt=<?php echo $this->_tpl_vars['d']['rentamt']; ?>
&amp;log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-warning btn-sm rent">Rent</a>
          <?php endif; ?>
          <a href="cart.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&amp;amt=<?php echo $this->_tpl_vars['d']['rentamt']; ?>
&amp;log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
&amp;tamt=<?php echo $this->_tpl_vars['d']['amount']; ?>
" class="btn btn-warning btn-sm cart">Add To Cart</a>
          <a href="customerofferview.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&amp;log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
&amp;okey=<?php echo $this->_tpl_vars['d']['offkey']; ?>
" class="btn btn-warning btn-sm offer">Offers</a>
        </div>
      </div>
    </div>
    <?php endforeach; endif; unset($_from); ?>
  </div>
</div>


       <?php endif; ?> 
       </body></html>