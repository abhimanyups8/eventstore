<?php
  include_once"settings/settings.php";
  include_once"classes/userclass.php";
  $obj=new userclass();
  
  $a=$_COOKIE['lkey'];
  $key=$_GET['key'];
  $totamt=$_GET['tamt'];
  $obj-> addtocart($key,$a,$totamt);
  ?>