<?php
require "models/detail.model.php";
require "models/movie.model.php";

$listShow = listShow();
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $item = getMovieItem($id);
  $show = getShow($id);
}
// print_r (getShow($id));
require "views/detail/detail.view.php";