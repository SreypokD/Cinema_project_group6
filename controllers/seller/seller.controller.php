<?php
require "models/seller/seller.model.php";
$heading = "Seller Page";
// print_r($_SERVER);

if( $_SERVER["PATH_INFO"]=="/form-movie"){
  require "views/seller/seller.form.view.php";
}else {
  require "views/seller/seller.view.php";
}

