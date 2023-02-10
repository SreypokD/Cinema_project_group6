<?php
require "models/seller.model.php";
require "models/delete.model.php";
// $heading = "Seller Page";

if (isset($_GET['id'])){
    $id = $_GET['id'];
    deleteMovie($id);
    header("location:/seller");
}
require "views/seller/seller.view.php";?>
