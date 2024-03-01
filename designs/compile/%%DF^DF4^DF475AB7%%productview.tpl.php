<?php /* Smarty version 2.6.26, created on 2023-07-14 16:51:46
         compiled from productview.tpl */ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br><br><br><br><br>
    <table class="table table-striped table-hover">
        <tr>
          <th>Category</th><th>Name</th><th>Image</th><th>Details</th><th>Rent Amount</th><th>Amount</th><th>Selling Opn</th>
        </tr>
        <?php $_from = $this->_tpl_vars['data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['d']):
?>
  
        <tr>
          <td><?php echo $this->_tpl_vars['d']['category']; ?>
</td>
          <td><?php echo $this->_tpl_vars['d']['name']; ?>
</td>
          <td><img src="images/<?php echo $this->_tpl_vars['d']['productkey']; ?>
/<?php echo $this->_tpl_vars['d']['image']; ?>
" height="200px" width="150px"></td>
          <td><?php echo $this->_tpl_vars['d']['details']; ?>
</td>
          <td><?php echo $this->_tpl_vars['d']['rentamt']; ?>
</td>
          <td><?php echo $this->_tpl_vars['d']['amount']; ?>
</td>
          <td><?php echo $this->_tpl_vars['d']['selling']; ?>
</td>


          <td><a href="productedit.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
" class="btn btn-warning">Edit</a></td>
          <td><a href="productdelete.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
" class="btn btn-danger">Delete</a></td>
                    <td><a href="feedbackview.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-secondary">Feedback View</a></td>
 <td><a href="offersinsert.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-primary">Offers Insert</a></td>
  <td><a href="offersview.php?key=<?php echo $this->_tpl_vars['d']['productkey']; ?>
&&log=<?php echo $this->_tpl_vars['d']['loginid']; ?>
" class="btn btn-info">View Offers</a></td>

        </tr>
        <?php endforeach; endif; unset($_from); ?>
      </table>
      
</body>
</html>