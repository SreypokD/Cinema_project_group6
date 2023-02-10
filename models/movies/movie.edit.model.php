<?php require "models/detail.model.php"; ?>

<?php
$item = getMovieItem();
if (isset($_POST['edit']))
{
  $sql = "SELECT * FROM "
}