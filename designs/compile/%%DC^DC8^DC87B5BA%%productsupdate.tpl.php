<?php /* Smarty version 2.6.26, created on 2023-10-13 06:27:37
         compiled from productsupdate.tpl */ ?>
<html>
<head><title>Registration</title></head>
<body>
    <center>
        <form method="post" action="" enctype="multipart/form-data">
          <table>
           <input type="hidden" name="hide" value="h">
           <tr><td>Product Category</td><td><input type="text" name="category" class="form-control"></td></tr>

           <tr><td>Product Name</td><td><input type="text" name="name"class="form-control"></td></tr>
           <tr><td>Shop Image</td><td><input type="file" name="image" class="form-label"></td></tr>

           <tr><td>Product Details</td><td><textarea name="details" class="form-control"></textarea></td></tr>
          <tr><td> Rent Amount Per Day</td><td><input type="text" name="rentamt" class="form-control"></td></tr>
            <tr><td>Amount</td><td><input type="text" name="amount" class="form-control"></td></tr>
            <tr><td>Selling Options</td><td><input type="radio" name="selling" value="Rent" > Rent
              <input type="radio" name="selling" value="Sell"> Sell
              <input type="radio" name="selling" value="Both"> Both</td></tr>

            <tr><td></td><td> <input type="Submit" value="Register" class="btn btn-success"></td></tr>
            </form>
        </table>
        </center>
</body>
</html> 