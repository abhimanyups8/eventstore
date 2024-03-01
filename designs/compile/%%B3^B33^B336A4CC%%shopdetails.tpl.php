<?php /* Smarty version 2.6.26, created on 2023-10-13 16:10:25
         compiled from shopdetails.tpl */ ?>

<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" type="text/css" href="css/button.css">

</head>
<body>
    <br><br><br><br><br><br>


 
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
<td><?php echo $this->_tpl_vars['d']['Contact']; ?>
</td>
<td><?php echo $this->_tpl_vars['d']['registration']; ?>
</td>

</tr>
<?php endforeach; endif; unset($_from); ?>
</table> -->

<div class="container" >
    

    <div class="row"  >
        <?php $_from = $this->_tpl_vars['view']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
        <div class="col-lg-3"  style=" border-right: 2px solid black; ">
            <img src="images/<?php echo $this->_tpl_vars['d']['eventkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" height="200px" width="150px"><br>
           <br> <font color="orange">Shop Name:</font> <?php echo $this->_tpl_vars['d']['name']; ?>
 <br>
            <font color="orange">City:</font> <?php echo $this->_tpl_vars['d']['city']; ?>
<br>
            <font color="orange">Contact:</font> <?php echo $this->_tpl_vars['d']['contact']; ?>
 <br>


          
        

        </div>
    
        <?php endforeach; endif; unset($_from); ?>
    </div>

</div>
<?php endif; ?>
<center><h1>Our Products</h1></center>
<div class="container-fluid">
    <div class="row justify-content-center">
      <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
            <div class="cad col-lg-3 product-preview" style="border: 1px solid black;">
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
        
          
      </div>
      <?php endforeach; endif; unset($_from); ?>
    </div>
  </div>


</body></html>