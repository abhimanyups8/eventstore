<?php
include_once "settings/settings.php";
include_once "classes/userclass.php";
$obj=new userclass();
$id=$_GET['prod'];
$obj->complaintdeletion($id);
?>