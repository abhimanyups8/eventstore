<?php /* Smarty version 2.6.26, created on 2023-10-13 06:19:06
         compiled from productsearch.tpl */ ?>
<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/button.css">
</head>
<body>
    <br><br><br><br><br><br>
<table align="center"> <form action="" method="POST">
<input type="hidden" name="hide" value="h">
<tr><td>Search Products</td><td><input type="text" name="search" class="form-control">
<td><input type="submit" value="Search" class="btn btn-success"></td></tr>
<table class="table table-striped table-hover">
</form>
</table>
    <?php if ($this->_tpl_vars['view'] != null): ?>
    <!-- <tr>
        <center>
    <table class="table table-striped table-hover">
        <th>Image</th>
        <th>Category</th>
    <th>Name</th>
    <th>Details</th> 
    <th>Rent amt</th>
    <th>Amount</th>
    <th>Buying Option</th>
    
    
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
    <td><a href="cart.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&amt=<?php echo $this->_tpl_vars['d']['rentamt']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
&&tamt=<?php echo $this->_tpl_vars['d']['amount']; ?>
" class="btn btn-warning ">Add To Cart </a></td>
    <td><a href="customerofferview.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
&&okey=<?php echo $this->_tpl_vars['d']['offkey']; ?>
" class="btn btn-warning">offers</a></td>

    
    </tr>
    <?php endforeach; endif; unset($_from); ?>
    </table>
    </center>-->
    <br>
    <div class="container">
        <div class="row">
          <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
          <div class="cad col-lg-3 col-md-4 col-sm-6 product-preview" style="border: 1px solid black;">
            <a href="productdetails.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
">
             <center> <img src="images/<?php echo $this->_tpl_vars['d']['productkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" class="rounded" height="225px" width="160px"><br></center>
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
     <?php endif; ?> 

</body></html>