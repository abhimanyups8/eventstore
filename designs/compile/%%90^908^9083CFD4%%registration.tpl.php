<?php /* Smarty version 2.6.26, created on 2023-10-16 16:09:12
         compiled from registration.tpl */ ?>
<html>
<head><title>Registration</title></head>
<body><br><br><br><br>
    <center>
        <form method="post" action="" enctype="multipart/form-data">
          <table>
           <input type="hidden" name="hide" value="h">
           <tr><td>Shop Name</td><td><input type="text" name="name" class="form-control"></td></tr>
           <tr><td>Shop Image</td><td><input type="file" name="image" class="form-control"></td></tr>

           <tr><td>Shop Address</td><td><textarea name="address" class="form-control"></textarea></td></tr>
           <tr><td>Pincode</td><td><input type="text" name="pincode" class="form-control"></td></tr>
           <tr><td><label>District</label></td><td>
             <select name="dist"><option></option>
            <option >Trivandrum</option>
            <option>Kollam</option>
            <option >Pathanamthitta</option> 
            <option >Alappuzha</option>
            <option >Kottayam</option>
            <option >Idukki</option> 
            <option>Eranakulam</option>
            <option>Thrissur</option>
            <option >Palakkad</option> 
            <option>Malappuram</option>
            <option>Kozhikod</option>
            <option>Wayanad</option> 
            <option>Kannur</option>
            <option>Kasargod</option>
         </select></td></tr>
          
           <tr><td> City </td><td><input type="text" name="city" class="form-control"></td></tr>
            <tr><td> Contact number </td><td><input type="text" name="contact" class="form-control"></td></tr>
            <tr><td> Registration number </td><td><input type="text" name="registration" class="form-control"></td></tr>
            <tr><td>email</td><td><input type="email" name="email" class="form-control"></td></tr>
            <tr><td>password</td><td><input type="password" name="password" class="form-control" ></td></tr>
           <tr><td></td><td> <input type="Submit" value="Register" class="btn btn-success"></td></tr>
            </form>
        </table>
        </center>
</body>
</html> 